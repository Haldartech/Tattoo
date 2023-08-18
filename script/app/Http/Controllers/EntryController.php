<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use Helper;

class EntryController extends Controller
{
    public function paydone_list_entry(Request $request)
    {
        return view("admin.pages.entry.paydonelist",compact("request"));
    }
    public function paydue_list_entry(Request $request)
    {
        return view("admin.pages.entry.payduelist",compact("request"));
    }
    public function add_entry()
    {
        return view("admin.pages.entry.create");
    }
    public function addEntry(Request $request)
    {
        $table = new Entry;
        $table->name=$request->name;
        $table->dob=$request->dob;
        $table->phone=$request->phone;
        $table->wp_no=$request->wp_no;
        $table->pay_done=$request->pay_done;
        $table->pay_due=$request->pay_due;
        $table->remark=$request->remark;
        if ($request->hasFile('pre_image')) {
            $image = $request->file('pre_image');
            $new_file_name=Helper::imageConvert("pre-",'entry',$image);
            $table->pre_image=$new_file_name;
            }
        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $new_file_name=Helper::imageConvert("post-",'entry',$image);
            $table->post_image=$new_file_name;
            }
        if ($request->hasFile('after_image')) {
            $image = $request->file('after_image');
            $new_file_name=Helper::imageConvert("after-",'entry',$image);
            $table->after_image=$new_file_name;
            }
        $table->save();
        toast("You have been successfully submitted","success");
        return back();
    }
    public function edit_entry($id)
    {
        $data = Entry::find($id);
        return view("admin.pages.entry.edit",compact("data"));
    }
    public function editEntry(Request $request, $id)
    {
        $data = Entry::find($id);
        $data->name=$request->name;
        $data->dob=$request->dob;
        $data->phone=$request->phone;
        $data->wp_no=$request->wp_no;
        $data->pay_done=$request->pay_done;
        $data->pay_due=$request->pay_due;
        $data->remark=$request->remark;
        if ($request->hasFile('pre_image')) {
            $image_path=('public/images/entry/'.$data->pre_image);
           if (file_exists($image_path) && !empty($data->pre_image))
            {
            unlink($image_path);
            }
            $image = $request->file('pre_image');
            $new_file_name=Helper::imageConvert("pre-",'entry',$image);
            $data->pre_image=$new_file_name;
            }
        if ($request->hasFile('post_image')) {
            $image_path=('public/images/entry/'.$data->post_image);
           if (file_exists($image_path) && !empty($data->post_image))
            {
            unlink($image_path);
            }
            $image = $request->file('post_image');
            $new_file_name=Helper::imageConvert("post-",'entry',$image);
            $data->post_image=$new_file_name;
            }
        if ($request->hasFile('after_image')) {
            $image_path=('public/images/entry/'.$data->after_image);
           if (file_exists($image_path) && !empty($data->after_image))
            {
            unlink($image_path);
            }
            $image = $request->file('after_image');
            $new_file_name=Helper::imageConvert("after-",'entry',$image);
            $data->after_image=$new_file_name;
            }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteEntry($id)
    {
        $data = Entry::find($id);
        $data->delete($id);
        toast("You have been successfully deleted","success");
        return back();
    }
}
