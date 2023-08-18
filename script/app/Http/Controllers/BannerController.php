<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\BannerTitle;
use Helper;

class BannerController extends Controller
{
    public function list_banner(Request $request)
    {
        return view("admin.pages.banner.index",compact("request"));
    }
    public function add_banner()
    {
        return view("admin.pages.banner.create");
    }
    public function addBanner(Request $request)
    {
        $table = new Banner;
        if ($request->hasFile('b_image')) {
            $image = $request->file('b_image');
            $new_file_name=Helper::imageConvert("banner-",'banner',$image);
            $table->b_image=$new_file_name;
            }
        $table->save();
        toast("You have been successfully submitted","success");
        return back();
    }
    public function edit_banner($id)
    {
        $data = Banner::find($id);
        return view("admin.pages.banner.edit",compact("data"));
    }
    public function editBanner(Request $request, $id)
    {
        $data = Banner::find($id);
        if ($request->hasFile('b_image')) {
            $image_path=('public/images/banner/'.$data->b_image);
           if (file_exists($image_path) && !empty($data->b_image))
            {
            unlink($image_path);
            }
            $image = $request->file('b_image');
            $new_file_name=Helper::imageConvert("banner-",'banner',$image);
            $data->b_image=$new_file_name;
            }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteBanner($id)
    {
        $data = Banner::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }



    public function list_bannertitle(Request $request)
    {
        return view("admin.pages.bannertitle.index",compact("request"));
    }
    public function add_bannertitle()
    {
        return view("admin.pages.bannertitle.create");
    }
    public function addBannerTitle(Request $request)
    {
        $table1 = new BannerTitle;
        $table1->b_title=$request->b_title;
        $table1->b_subtitle=$request->b_subtitle;
        $table1->save();
        toast("You have been successfully submitted","success");
        return redirect("/admin/list-bannertitle");
    }
    public function edit_bannertitle($id)
    {
        $data = BannerTitle::find($id);
        return view("admin.pages.bannertitle.edit",compact("data"));
    }
    public function editBannerTitle(Request $request, $id)
    {
        $data1 = BannerTitle::find($id);
        $data1->b_title=$request->b_title;
        $data1->b_subtitle=$request->b_subtitle;
        $data1->save();
        toast("You have been successfully updated","success");
        return back();
    }


}
