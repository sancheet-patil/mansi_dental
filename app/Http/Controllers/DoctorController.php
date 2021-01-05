<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctors;
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
    
}
