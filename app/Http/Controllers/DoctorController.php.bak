<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctors;
use App\Models\patient_work;
use App\Models\work_item;
use Carbon\Carbon;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors = doctors::all();
        return view ('Frontend.doctor',compact('doctors'));
    }
    public function save(Request $request)
    {
        $doctor = new doctors();
        $doctor->FirstName= $request->first_name;
        $doctor->LastName= $request->last_name;
        $doctor->PhoneNumber = $request->phone_number;
        $doctor->Address = $request->address;
        $doctor->ClinicName = $request->clinic_name;
        if( $request->hasfile('image') )
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('ProfilePic',$filename);
            $doctor->ProfilePic="ProfilePic/".$filename;
        
        }
        $doctor->save();
        return back()->with('Succes',"Successfully Added!!!"); 
    }

    public function update(Request $request)
    {
        $doctor= doctors::where('id',$request->doctor_id)->first();
        $doctor->FirstName=$request->first_name;
        $doctor->LastName=$request->last_name;
        $doctor->PhoneNumber=$request->phone_number;
        $doctor->Address = $request->address;
        $doctor->ClinicName = $request->clinic_name;
        $doctor->save();
        return back()->with('Succes',"Successfully Edited!!!");
    }

    public function delete(Request $request)
    {
        $doctor= doctors::where('id',$request->doctor_id)->first();
        $doctor->delete();
        return back()->with('Succes',"Successfully Delete!!!");
    }
    
    public function invoice (Request $request)
    {
        $doctor = doctors::find($request->doctor_id);
        $patient_work = patient_work::where([['doctor_id','=',$doctor->id],['created_at','>',$request->dateFrom],['created_at','<',$request->dateTo]])->get();
        $invoice = \ConsoleTVs\Invoices\Classes\Invoice::make();
        foreach($patient_work as $patient)
        {
            $work=work_item::find($patient->work_id);
            $quantity = sizeof(explode(',',$patient->tooth_Number));
            $invoice->addItem($work->work_item, $work->price,$quantity, $patient->work_code, $patient->patient_name);
        }
        $invoice->number($doctor->id);
        $invoice->with_pagination(true);
        $invoice->duplicate_header(true);
        $invoice->due_date(Carbon::now()->addMonths(1));
        $invoice->notes('Bill to be paid hand to hand!!!!');
        $invoice->customer([
            'name'      => $doctor->ClinicName,
            'id'        => $doctor->id,
            'phone'     => $doctor->PhoneNumber,
            'location'  => $doctor->Address,
            'country'   => 'India',
        ])
        ->download($doctor->FirstName);

    }
}
