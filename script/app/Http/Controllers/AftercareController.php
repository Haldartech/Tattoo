<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aftercare;
use Helper;

class AftercareController extends Controller
{
    public function list_aftercare(Request $request)
    {
        return view("admin.pages.aftercare.index",compact("request"));
    }
    public function add_aftercare()
    {
        return view("admin.pages.aftercare.create");
    }
    public function addAftercare(Request $request)
    {
       $table = new Aftercare;
       $table->title=$request->title;
       if ($request->hasFile('ac_image')) {
        $image = $request->file('ac_image');
        $new_file_name=Helper::imageConvert("ac-",'aftercare',$image);
        $table->ac_image=$new_file_name;
        }
        $table->desc=$request->desc;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_aftercare($id)
    {
        $data = Aftercare::find($id);
        return view("admin.pages.aftercare.edit",compact("data"));
    }
    public function editAftercare(Request $request,$id)
    {
        $data = Aftercare::find($id);
        $data->title=$request->title;
        if ($request->hasFile('ac_image')) {
            $image_path=('public/images/aftercare/'.$data->ac_image);
           if (file_exists($image_path) && !empty($data->ac_image))
            {
            unlink($image_path);
            }
            $image = $request->file('ac_image');
            $new_file_name=Helper::imageConvert("ac-",'aftercare',$image);
            $data->ac_image=$new_file_name;
            }
            $data->desc=$request->desc;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteAftercare($id)
    {
        $data = Aftercare::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
