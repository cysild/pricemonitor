<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use App\Category;
use App\Role;
class Points extends Model
{
    //
       protected $table = 'member_points';


       public static function selectall(){

        $data=DB::table('member_points')
                ->where('is_delete',0)->where('shop_id',Role::shop())
                ->select('member_points.member_count as numberofpacks','member_points.points_value as packvalue','member_points.status','member_points.is_delete','member_points.id')
                ->get();

        return $data;
    }

     public static function pointseditview($id){

        $data=DB::table('member_points')
                ->where('id',$id)
                ->select('member_points.member_count as member_range','member_points.points_value as point_value','member_points.status','member_points.is_delete','member_points.id')
                ->first();

        return $data;
    }


    public static function select(){
        $data = DB::table("member_points")
                ->select('*')
                    ->where('status',1)
                    ->where('is_delete',1)
                ->get();

        return $data;
    }



 }
 ?>