<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tooth_shade;

class ShadeController extends Controller
{
    //
    public function index()
    {
        $ToothShades = tooth_shade::all();
        return view ('Frontend.tooth_shade',compact('ToothShades'));
    }
    public function save(Request $request)
    {
        $ToothShade = new tooth_shade();
        $ToothShade->shade_code= $request->shade_code;
        $ToothShade->save();
        return back()->with('Succes',"Successfully Added"); 
    }

    public function update(Request $request)
    {
        $ToothShade = tooth_shade::find($request->toothshade_id);
        $ToothShade->shade_code= $request->shade_code;
        $ToothShade->save();
        return back()->with('Succes',"Successfully Edited"); 
    }

    public function delete(Request $request)
    {
        $ToothShade = tooth_shade::find($request->toothshade_id);
        $ToothShade->delete();
        return back()->with('Succes',"Successfully Deleted"); 
    }
}
