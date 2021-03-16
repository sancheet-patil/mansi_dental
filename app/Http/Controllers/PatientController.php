<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_work;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\work_item;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Carbon\Carbon;

class PatientController extends Controller
{
    //
    public function index()
    {
        $patient = patient_work::all();
        return view('Frontend.patient',compact('patient'));
    }

    public function addView()
    {
        return view('Frontend.new_patient');
    }

    public function save(Request $request)
    {
        $patient = new patient_work();
        $patient->patient_name = $request->patient_name;
        $patient->age = $request->age;
        $patient->doctor_id = $request->doctor_id; 
        $patient->tooth_Number = implode(",",$request->tooth_number);
        $patient->work_id = $request->work_item_id;
        $patient->shade= $request->shade_id;
        $patient->abutments = $request->abutments;
        $patient->work_code = "PR".date('Y').rand(000010,100000);
        $workPeriod = DB::table('work_item')->select('warranty_period')->where('id',$request->work_item_id)->first();
        $patient->warranty_expiry_date = Carbon::now()->addYears($workPeriod->warranty_period);
        $patient->save();
        $workName = DB::table('work_item')->select('work_item')->where('id',$patient->work_id)->first();
        $QrCode = " \n Patient Name : ".$patient->patient_name." \n Tooth Number : ".$patient->tooth_Number."\n Work : ". $workName->work_item."\n Warranty Expiry:".$patient->warranty_expiry_date;
        $path='QrCode/'.$patient->patient_name.'.png';
        QrCode::size(250)
            ->format('png')
            ->generate($QrCode, public_path($path));
        return response()->download($path, $patient->patient_name.'.png', ['Content-Type' => 'image/png']);
    }

    public function update(Request $request)
    {
        $patient = patient_work::find($request->patient_id);
        $patient->patient_name = $request->patient_name;
        $patient->doctor_id = $request->doctor_id; 
        $patient->tooth_Number = $request->tooth_number;
        $patient->work_id = $request->work_item_id;
        $patient->shade= $request->shade_id;
        $patient->save();
        return back()->with('Succes',"Successfully Updated!!!");
    }

    public function delete(Request $request)
    {
        $patient= patient_work::where('id',$request->patient_id)->first();
        $patient->delete();
        return back()->with('Succes',"Successfully Delete!!!");
    }

    public function qrcode($id)
    {
        $patient = patient_work::find($id);
        $path='QrCode/'.$patient->patient_name.'.png';
        return response()->download($path, $patient->patient_name.'.png', ['Content-Type' => 'image/png']);
    }

    
}
