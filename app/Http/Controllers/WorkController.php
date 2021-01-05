<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_item;
class WorkController extends Controller
{
    //
    public function index()
    {
        $WorkItem = work_item::all();
        return view ('Frontend.work_item',compact('WorkItem'));
    }
    public function save(Request $request)
    {
        $WorkItem = new work_item();
        $WorkItem->work_item= $request->work_item;
        $WorkItem->price=$request->price;
        $WorkItem->warranty_period =$request->warranty_period;
        $WorkItem->save();
        return back()->with('Succes',"Successfully Added"); 
    }

    public function update(Request $request)
    {
        $WorkItem = work_item::find($request->work_item_id);
        $WorkItem->work_item= $request->work_item;
        $WorkItem->price=$request->price;
        $WorkItem->warranty_period =$request->warranty_period;
        $WorkItem->save();
        return back()->with('Succes',"Successfully Edited"); 
    }

    public function delete(Request $request)
    {
        $WorkItem = work_item::find($request->work_item_id);
        $WorkItem->delete();
        return back()->with('Succes',"Successfully Deleted"); 
    }
}
