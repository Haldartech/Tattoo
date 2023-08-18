<?php

namespace App\Helpers;
use Session;
use DB;
use Illuminate\Support\Facades\Http;
use App\Models\Gallery;
use App\Models\Cat;

class Helper
{

    public static function imageConvert($abb,$path="",$data)
    {
      if ($data!=null) {
        $image = $data;
        $new_file_name = $abb.rand('0000','9999').'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'public/images/'.$path;
         if ( !file_exists( $destinationPath ) && !is_dir( $destinationPath ) ) {
            mkdir( $destinationPath );
        }
        $image->move($destinationPath,$new_file_name);
         return $new_file_name;
         }
    }

    public static function slugGenarate($url)
    {
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));
        return $slug;
    }

    public static function subgallery($id)
    {
        $data = Gallery::find($id);
        return (!empty($data->id)) ? $data->title : '';
    }

    public static function title($id)
    {
        $data = Cat::find($id);
        return (!empty($data->id)) ? $data->title : '';
    }

}
