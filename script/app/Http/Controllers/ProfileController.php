<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Helper;

class ProfileController extends Controller
{
    public function profile()
    {
        $datas = Profile::all();
        return view("admin.pages.profile.profile",compact("datas"));
    }
    public function addProfile(Request $request,$id)
    {
        $data = Profile::find($id);
        if ($request->hasFile('profile')) {
            $image_path=('public/images/profile/'.$data->profile);
           if (file_exists($image_path) && !empty($data->profile))
            {
            unlink($image_path);
            }
            $image = $request->file('profile');
            $new_file_name=Helper::imageConvert("pro-",'profile',$image);
            $data->profile=$new_file_name;
            }
        $data->save();
        toast("You have successfully submitted","success");
        return back();
    }
}
