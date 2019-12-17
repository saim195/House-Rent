<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Str;


class postController extends Controller
{
    public function add_post(){
      return view('admin.add_post');
    }
    public function save_post(Request $request){
      $status=array();
        $status['badroom']=$request->badroom;
        $status['daiing']=$request->daiing;
        $status['drowing']=$request->drowing;
        $status['bathroom']=$request->bathroom;
        $status['corridor']=$request->corridor;
        $status['address']=$request->address;
        $status['air']=$request->air;
        $status['cell']=$request->cell;
        $status['rent']=$request->rent;

        $path=$request->file('status')->store('/image');

          $image=$request->file('status');
                  if ($image){

                    $image_name=Str::random(20);
                    $ext=strtolower($image->getClientOriginalExtension());
                    $image_full_name=$image_name.'.'.$ext;
                    $upload_path='image/';
                    $image_url=$upload_path.$image_full_name;
                    $success=$image->move($upload_path,$image_full_name);
                        if ($success) {
                        $status['status']=$image_url;
                        DB::table('tbl_post')->insert($status);
                        return Redirect::to('/add-post');
                                      }
                           }




                         }

              public function all_post(){
                return view('admin.all-post');
              }

              public function edit($post_id){
                $all_post_show=DB::table('tbl_post')
                          ->where('post_id',$post_id)
                          ->first();
                $all_post_mng=view('admin.edit_post')
                          ->with('all_post_show',$all_post_show);
                return view('admin_deshbord')
                          ->with('user.edit',$all_post_mng);
              }
              public function edit_post(Request $request,$post_id){
                $status=array();
                  $status['badroom']=$request->badroom;
                  $status['daiing']=$request->daiing;
                  $status['drowing']=$request->drowing;
                  $status['bathroom']=$request->bathroom;
                  $status['corridor']=$request->corridor;
                  $status['address']=$request->address;
                  $status['air']=$request->air;
                  $status['cell']=$request->cell;
                  $status['rent']=$request->rent;

                      DB::table('tbl_post')->update($status);
                      return Redirect::to('/all-post');


              }
              public function delete_post($post_id){
                 DB::table('tbl_post')
                        ->where('post_id',$post_id)
                        ->delete();

                          return Redirect::to('/all-post');

              }

              public function user_post(){
                return view('admin.show_user_post');
              }
              public function delete_user_post($user_post_id){
                    DB::table('tbl_user_post')
                            ->where('user_post_id',$user_post_id)
                            ->delete();
                    return Redirect::to('/user-post');
              }


}
