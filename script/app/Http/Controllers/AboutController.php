<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Helper;

class AboutController extends Controller
{
    public function list_about(Request $request)
    {
        return view("admin.pages.about.index",compact("request"));
    }
    public function add_about()
    {
        return view("admin.pages.about.create");
    }
    public function addAbout(Request $request)
    {
       $table = new About;
       $table->title=$request->title;
       $table->sec_title=$request->sec_title;
       $table->subtitle=$request->subtitle;
       if ($request->hasFile('a_image')) {
        $image = $request->file('a_image');
        $new_file_name=Helper::imageConvert("about-",'about',$image);
        $table->a_image=$new_file_name;
        }
        $table->desc=$request->desc;
       $table->save();
       toast("You have been successfully submitted","success");
       return redirect('/admin/list-about');
    }
    public function edit_about($id)
    {
        $data = About::find($id);
        return view("admin.pages.about.edit",compact("data"));
    }
    public function editAbout(Request $request,$id)
    {
        $data = About::find($id);
        $data->title=$request->title;
        $data->sec_title=$request->sec_title;
        $data->subtitle=$request->subtitle;
        if ($request->hasFile('a_image')) {
            $image_path=('public/images/about/'.$data->a_image);
           if (file_exists($image_path) && !empty($data->a_image))
            {
            unlink($image_path);
            }
            $image = $request->file('a_image');
            $new_file_name=Helper::imageConvert("about-",'about',$image);
            $data->a_image=$new_file_name;
            }
            $data->desc=$request->desc;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }

    public function deleteAbout($id)
    {
        $data = About::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
