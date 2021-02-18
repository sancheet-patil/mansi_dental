<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    //
    public function index()
    {
        $Status = false;
        return view('Frontend.Qrcode',compact('Status'));
    }

    public function display(Request $request)
    {
        return back()->with('success',"Successfully QrCode Generate");
    }
}
