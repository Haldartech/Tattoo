<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogMulImage;
use Helper;
class BlogController extends Controller
{
    public function list_blog(Request $request)
    {
        return view("admin.pages.blog.index",compact("request"));
    }
    public function add_blog()
    {
        return view("admin.pages.blog.create");
    }
    public function addBlog(Request $request)
    {
       $table = new Blog;
       $table->blog_title=$request->blog_title;
       $table->slug=Helper::slugGenarate($request->blog_title);
       if ($request->hasFile('blog_image')) {
        $image = $request->file('blog_image');
        $new_file_name=Helper::imageConvert("blog-",'blog',$image);
        $table->blog_image=$new_file_name;
        }
        $table->shrt_desc=$request->shrt_desc;
        $table->long_desc=$request->long_desc;
        $table->date = date('Y-m-d');
       $table->save();

       $mul_count=count($request->file('blog_mul_image'));
        for ($i=0; $i <$mul_count ; $i++) {
            $table1 = new BlogMulImage;
            $table1->b_id=$table->id;
            $image = $request->file('blog_mul_image')[$i];
            $new_file_name=Helper::imageConvert("blogmul-",'blogmul',$image);
            $table1->blog_mul_image =$new_file_name;
            $table1->save();
        }

       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_blog($id)
    {
        $data = Blog::find($id);
        return view("admin.pages.blog.edit",compact("data"));
    }
    public function editBlog(Request $request,$id)
    {
        $data = Blog::find($id);
        $data->blog_title=$request->blog_title;
        $data->slug=Helper::slugGenarate($request->blog_title);
        if ($request->hasFile('blog_image')) {
            $image_path=('public/images/blog/'.$data->blog_image);
           if (file_exists($image_path) && !empty($data->blog_image))
            {
            unlink($image_path);
            }
            $image = $request->file('blog_image');
            $new_file_name=Helper::imageConvert("blog-",'blog',$image);
            $data->blog_image=$new_file_name;
            }
            $data->shrt_desc=$request->shrt_desc;
            $data->long_desc=$request->long_desc;
            $data->date=date('Y-m-d');
        $data->save();

        if(!empty($request->file('blog_mul_image'))){
            $mul_count=count($request->file('blog_mul_image'));
            if($mul_count>0){
            for ($i=0; $i <$mul_count ; $i++) {
                $data1 = new BlogMulImage;
                $data1->b_id=$id;
                $image = $request->file('blog_mul_image')[$i];
                $new_file_name=Helper::imageConvert("blogmul-",'blogmul',$image);
                $data1->blog_mul_image =$new_file_name;
                $data1->save();
            }
        }
    }

        toast("You have been successfully updated","success");
        return back();
    }

    public function ajaxBlogImageDelete($id)
    {
        $product=BlogMulImage::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function deleteBlog($data)
    {
        Blog::where("id",$data)->delete();
        BlogMulImage::where("b_id",$data)->delete();
        toast("You have successfully deleted","success");
        return back();
    }
}
