<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryMulImg;
use App\Models\Cat;
use App\Models\Category;
use Helper;
use DB;

class GalleryController extends Controller
{
    public function list_gallery(Request $request)
    {
        return view("admin.pages.gallery.index",compact("request"));
    }
    public function add_gallery()
    {
        return view("admin.pages.gallery.create");
    }
    public function addCategory(Request $request){
        $validated = $request->validate([
            'title' => ['required', 'unique:cats,title'],
        ]);

        $table = new Cat;
        $table->title=$request->title;
        $table->save();
        toast("You have been successfully submitted","success");
        return back();

    }
    public function addGallery(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'unique:categories,title'],
        ]);

        $table = new Category;
        $table->title=$request->title;
        $table->date = date('Y-m-d');
        $table->save();

        $table1 = new Gallery;
        $table1->cat_id=$table->id;
        $table1->tag=json_encode($request->tag);
        $table1->save();

        $mul_count=count($request->file('gal_mul_img'));
        for ($i=0; $i <$mul_count ; $i++) {
            $table2 = new GalleryMulImg;
            $table2->gal_id=$table->id;
            $image = $request->file('gal_mul_img')[$i];
            $new_file_name=Helper::imageConvert("gal-",'gallery',$image);
            $table2->gal_mul_img =$new_file_name;
            $table2->save();
        }

        toast("You have been successfully submitted","success");
        return back();
    }
    public function edit_gallery($id)
    {
        $data = Gallery::find($id);
        $category = Category::find($id);
        return view("admin.pages.gallery.edit",compact("data","category"));
    }
    public function editGallery(Request $request, $id)
    {
        $data = Category::find($id);
        $data->title=$request->title;
        $data->date = date('Y-m-d');
        $data->save();

        $data1 = Gallery::find($id);
        $data1->cat_id=$data->id;
        $data1->tag=$request->tag;
        $data1->save();

        if(!empty($request->file('gal_mul_img'))){
            $mul_count=count($request->file('gal_mul_img'));
            if($mul_count>0){
            for ($i=0; $i <$mul_count ; $i++) {
                $data1 = new GalleryMulImg;
                $data1->gal_id=$id;
                $image = $request->file('gal_mul_img')[$i];
                $new_file_name=Helper::imageConvert("gal-",'gallery',$image);
                $data1->gal_mul_img =$new_file_name;
                $data1->save();
            }
        }
    }
        toast("You have been successfully updated","success");
        return back();
    }
    public function deleteGallery($data)
    {
        Category::where("id",$data)->delete();
        Gallery::where("cat_id",$data)->delete();
        GalleryMulImg::where("gal_id",$data)->delete();
        toast("You have successfully deleted","success");
        return back();
    }
    public function ajaxGalleryImageDelete($id)
    {
        $product=GalleryMulImg::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
    public function gettag(Request $request)
    {
    //     echo "addd";
    $cat_id = $request->post('cat_id');
    $form = DB::table('galleries')->where("cat_id", $cat_id)->orderBy("tag", "asc")->get();

    $objects = [];
    foreach ($form as $tag) {
        $arrval = json_decode($tag->tag, true);
        if (is_array($arrval)) {
            $cut = count($arrval);
            for ($i = 0; $i < $cut; $i++) {
                if (is_array($arrval[$i])) {
                    $objects[] = implode(',', $arrval[$i]);
                } else {
                    $objects[] = $arrval[$i];
                }
            }
        }
    }

    $html = '<option value="">Select Tag</option>';
    foreach ($objects as $obj) {
        $result = explode(",", $obj);
        $count = count($result);
        for ($i = 0; $i < $count; $i++) {
            $optionValue = trim($result[$i]);
            // $selected = ($obj->tag == $request->src_tag) ? 'selected' : '';
            $html .= '<option value="' . $optionValue . '">' . $optionValue . '</option>';
        }
    }

    echo '<select>' . $html . '</select>';

    }

    public function ajax_list_title(Request $request)
    {
        $datas=DB::table('categories')->whereRaw("title LIKE '%".$request->valu."%'")->get();
        return $datas;
    }
}
