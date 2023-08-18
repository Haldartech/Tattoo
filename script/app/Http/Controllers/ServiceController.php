<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceMulImage;
use Helper;

class ServiceController extends Controller
{
    public function list_service(Request $request)
    {
        return view("admin.pages.service.index",compact("request"));
    }
    public function add_service()
    {
        return view("admin.pages.service.create");
    }
    public function addService(Request $request)
    {
       $table = new Service;
       $table->title=$request->title;
       $table->slug=Helper::slugGenarate($request->title);
       $table->shrt_desc=$request->shrt_desc;
       $table->long_desc=$request->long_desc;
       if ($request->hasFile('s_image')) {
        $image = $request->file('s_image');
        $new_file_name=Helper::imageConvert("service-",'service',$image);
        $table->s_image=$new_file_name;
        }
       $table->save();

       $mul_count=count($request->file('ser_mul_image'));
        for ($i=0; $i <$mul_count ; $i++) {
            $table1 = new ServiceMulImage;
            $table1->s_id=$table->id;
            $image = $request->file('ser_mul_image')[$i];
            $new_file_name=Helper::imageConvert("ser_mul-",'service_mul_img',$image);
            $table1->ser_mul_image =$new_file_name;
            $table1->save();
        }

       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_service($id)
    {
        $data = Service::find($id);
        return view("admin.pages.service.edit",compact("data"));
    }
    public function editService(Request $request,$id)
    {
        $data = Service::find($id);
        $data->title=$request->title;
        $data->slug=Helper::slugGenarate($request->title);
        $data->shrt_desc=$request->shrt_desc;
        $data->long_desc=$request->long_desc;
        if ($request->hasFile('s_image')) {
            $image_path=('public/images/service/'.$data->s_image);
           if (file_exists($image_path) && !empty($data->s_image))
            {
            unlink($image_path);
            }
            $image = $request->file('s_image');
            $new_file_name=Helper::imageConvert("service-",'service',$image);
            $data->s_image=$new_file_name;
            }
        $data->save();

        if(!empty($request->file('ser_mul_image'))){
            $mul_count=count($request->file('ser_mul_image'));
            if($mul_count>0){
            for ($i=0; $i <$mul_count ; $i++) {
                $data1 = new ServiceMulImage;
                $data1->s_id=$id;
                $image = $request->file('ser_mul_image')[$i];
                $new_file_name=Helper::imageConvert("ser_mul-",'service_mul_img',$image);
                $data1->ser_mul_image =$new_file_name;
                $data1->save();
            }
        }
    }

        toast("You have been successfully updated","success");
        return back();
    }

    public function ajaxServiceImageDelete($id)
    {
        $product=ServiceMulImage::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function deleteService($data)
    {
        Service::where("id",$data)->delete();
        ServiceMulImage::where("s_id",$data)->delete();
        toast("You have successfully deleted","success");
        return back();
    }
}
