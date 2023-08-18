<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;

class ProcessController extends Controller
{
    public function list_process(Request $request)
    {
        return view("admin.pages.process.index",compact("request"));
    }
    public function add_process()
    {
        return view("admin.pages.process.create");
    }
    public function addProcess(Request $request)
    {
       $table = new Process;
       $table->title=$request->title;
       $table->desc=$request->desc;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_process($id)
    {
        $data = Process::find($id);
        return view("admin.pages.process.edit",compact("data"));
    }
    public function editProcess(Request $request,$id)
    {
        $data = Process::find($id);
        $data->title=$request->title;
        $data->desc=$request->desc;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteProcess($id)
    {
        $data = Process::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
