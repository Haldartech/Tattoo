<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Helper;

class PagesController extends Controller
{
    public function list_pages(Request $request)
    {
        return view("admin.pages.pages_manager.index",compact("request"));
    }
    public function add_pages()
    {
        return view("admin.pages.pages_manager.create");
    }
    public function addPages(Request $request)
    {
       $table = new Page;
       $table->title=$request->title;
       $table->desc=$request->desc;
       if ($request->hasFile('p_image')) {
        $image = $request->file('p_image');
        $new_file_name=Helper::imageConvert("pages-",'pages_manager',$image);
        $table->p_image=$new_file_name;
        }
        if ($request->hasFile('pp_image')) {
            $image = $request->file('pp_image');
            $new_file_name=Helper::imageConvert("price-",'price_image',$image);
            $table->p_image=$new_file_name;
            }
       $table->save();
       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_pages($id)
    {
        $data = Page::find($id);
        return view("admin.pages.pages_manager.edit",compact("data"));
    }
    public function editPages(Request $request,$id)
    {
        $data = Page::find($id);
        $data->title=$request->title;
        $data->desc=$request->desc;
        if ($request->hasFile('p_image')) {
            $image_path=('public/images/p_image/'.$data->p_image);
           if (file_exists($image_path) && !empty($data->p_image))
            {
            unlink($image_path);
            }
            $image = $request->file('p_image');
            $new_file_name=Helper::imageConvert("pages-",'pages_manager',$image);
            $data->p_image=$new_file_name;
            }

            if ($request->hasFile('pp_image')) {
                $image_path=('public/images/pp_image/'.$data->pp_image);
               if (file_exists($image_path) && !empty($data->pp_image))
                {
                unlink($image_path);
                }
                $image = $request->file('pp_image');
                $new_file_name=Helper::imageConvert("price-",'price_image',$image);
                $data->pp_image=$new_file_name;
                }
        $data->save();
        toast("You have been successfully updated","success");
        return back();
    }
}
