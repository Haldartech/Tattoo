<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioImg;
use App\Models\PortfolioVid;
use Helper;

class PortfolioController extends Controller
{
    // PortfolioImg
    public function list_portfolioimg(Request $request)
    {
        return view("admin.pages.portfolio_img.index",compact("request"));
    }
    public function add_portfolioimg()
    {
        return view("admin.pages.portfolio_img.create");
    }
    public function addPortfolioimg(Request $request)
    {
       $table = new PortfolioImg;
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $new_file_name=Helper::imageConvert("portfolio-",'portfolio',$image);
        $table->image=$new_file_name;
        }
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_portfolioimg($id)
    {
        $data = PortfolioImg::find($id);
        return view("admin.pages.portfolio_img.edit",compact("data"));
    }
    public function editPortfolioimg(Request $request,$id)
    {
        $data = PortfolioImg::find($id);
        if ($request->hasFile('image')) {
            $image_path=('public/images/portfolio/'.$data->image);
           if (file_exists($image_path) && !empty($data->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("portfolio-",'portfolio',$image);
            $data->image=$new_file_name;
            }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deletePortfolioimg($id)
    {
        $data = PortfolioImg::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }


    // PortfolioVid
    public function list_portfoliovid(Request $request)
    {
        return view("admin.pages.portfolio_vid.index",compact("request"));
    }
    public function add_portfoliovid()
    {
        return view("admin.pages.portfolio_vid.create");
    }
    public function addPortfoliovid(Request $request)
    {
       $table = new PortfolioVid;
       $table->video=$request->video;
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_portfoliovid($id)
    {
        $data = PortfolioVid::find($id);
        return view("admin.pages.portfolio_vid.edit",compact("data"));
    }
    public function editPortfoliovid(Request $request,$id)
    {
        $data = PortfolioVid::find($id);
        $data->video=$request->video;
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
    public function deletePortfoliovid($id)
    {
        $data = PortfolioVid::find($id);
        $data->delete($id);
        toast("You have successfully deleted","success");
        return back();
    }
}
