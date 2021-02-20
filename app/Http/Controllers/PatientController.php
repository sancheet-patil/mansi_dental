<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_work;
use Illuminate\Support\Facades\DB;

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
        $patient->save();
        $workName = DB::table('work_item')->select('work_item')->where('id',$patient->work_id)->first();
        $QrCode = " \n Patient Name : ".$patient->patient_name." \n Tooth Number : ".$patient->tooth_Number."\n Work : ". $workName->work_item;
        return view('Frontend.QrCode',compact('QrCode'));

    }
}
