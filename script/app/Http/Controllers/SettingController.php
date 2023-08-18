<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Helper;

class SettingController extends Controller
{
    public function setting()
    {
        $datas = Setting::all();
        return view("admin.pages.setting.edit",compact("datas"));
    }
    public function editSetting(Request $request, $id)
    {
        $table = Setting::find($id);
        if ($request->hasFile('logo')) {
            $image_path=('public/images/logo/'.$table->logo);
           if (file_exists($image_path) && !empty($table->logo))
            {
            unlink($image_path);
            }
            $image = $request->file('logo');
            $new_file_name=Helper::imageConvert("logo-",'logo',$image);
            $table->logo=$new_file_name;
            }
        $table->title=$request->title;
        $table->subtitle=$request->subtitle;
        $table->address=$request->address;
        $table->sec_address=$request->sec_address;
        $table->gmail=$request->gmail;
        $table->phone=$request->phone;
        $table->mon=$request->mon;
        $table->tue	=$request->tue;
        $table->wed=$request->wed;
        $table->thu=$request->thu;
        $table->fri=$request->fri;
        $table->sat=$request->sat;
        $table->weekend=$request->weekend;
        $table->facebook=$request->facebook;
        $table->youtube=$request->youtube;
        $table->twitter=$request->twitter;
        $table->insta=$request->insta;
        $table->pinterest=$request->pinterest;
        $table->promo=$request->promo;
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }
}
