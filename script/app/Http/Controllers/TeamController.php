<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamWorkImage;
use Helper;

class TeamController extends Controller
{
    public function list_team(Request $request)
    {
        return view("admin.pages.team.index",compact("request"));
    }
    public function add_team()
    {
        return view("admin.pages.team.create");
    }
    public function addTeam(Request $request)
    {
       $table = new Team;
       $table->name=$request->name;
       $table->slug=Helper::slugGenarate($request->name);
       $table->designation=$request->designation;
       $table->desc=$request->desc;
       $table->email=$request->email;
       $table->phone=$request->phone;
       $table->facebook=$request->facebook;
       $table->youtube=$request->youtube;
       $table->twitter=$request->twitter;
       $table->insta=$request->insta;
       $table->about_me=$request->about_me;
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $new_file_name=Helper::imageConvert("team-",'team',$image);
        $table->image=$new_file_name;
        }
       $table->save();

       $mul_count=count($request->file('team_work_image'));
        for ($i=0; $i <$mul_count ; $i++) {
            $table1 = new TeamWorkImage;
            $table1->t_id=$table->id;
            $image = $request->file('team_work_image')[$i];
            $new_file_name=Helper::imageConvert("team_work-",'team_work',$image);
            $table1->team_work_image =$new_file_name;
            $table1->save();
        }

       toast("You have been successfully submitted","success");
       return back();
    }
    public function edit_team($id)
    {
        $data = Team::find($id);
        return view("admin.pages.team.edit",compact("data"));
    }
    public function editTeam(Request $request,$id)
    {
        $data = Team::find($id);
        $data->name=$request->name;
        $data->slug=Helper::slugGenarate($request->name);
        $data->designation=$request->designation;
        $data->desc=$request->desc;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->facebook=$request->facebook;
        $data->youtube=$request->youtube;
        $data->twitter=$request->twitter;
        $data->insta=$request->insta;
        $data->about_me=$request->about_me;
        if ($request->hasFile('image')) {
            $image_path=('public/images/team/'.$data->image);
           if (file_exists($image_path) && !empty($data->image))
            {
            unlink($image_path);
            }
            $image = $request->file('image');
            $new_file_name=Helper::imageConvert("team-",'team',$image);
            $data->image=$new_file_name;
            }
        $data->save();

        if(!empty($request->file('team_work_image'))){
            $mul_count=count($request->file('team_work_image'));
            if($mul_count>0){
            for ($i=0; $i <$mul_count ; $i++) {
                $data1 = new TeamWorkImage;
                $data1->t_id=$id;
                $image = $request->file('team_work_image')[$i];
                $new_file_name=Helper::imageConvert("team_work-",'team_work',$image);
                $data1->team_work_image =$new_file_name;
                $data1->save();
            }
        }
    }

        toast("You have been successfully updated","success");
        return back();
    }

    public function ajaxTeamImageDelete($id)
    {
        $product=TeamWorkImage::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function deleteTeam($data)
    {
        Team::where("id",$data)->delete();
        TeamWorkImage::where("t_id",$data)->delete();
        toast("You have successfully deleted","success");
        return back();
    }
}
