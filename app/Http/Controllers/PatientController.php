<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_work;

class PatientController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.patient');
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
        $patient->work_code = $request->work_item_id + rand(0000000010,10000000000);
        $patient->save();
        return view('Frontend.QrCode',compact('patient'));

    }
}
