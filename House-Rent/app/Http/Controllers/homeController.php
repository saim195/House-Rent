<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\str;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class homeController extends Controller
{
    public function index(){
      return view('user.index');
    }
    public function login(){
      return view('user.user_login');
    }
    public function user_login(Request $request){

        $email=$request->email;
        $password=$request->password;

          $login= DB::table('tbl_registration')
                  ->where('email',$email)
                  ->where('password',$password)
                  ->first();
              if ($login) {
                Session('fname',$login->fname);
                Session('reg_id',$login->reg_id);
                return Redirect::to('/');
              }
              else {
                return Redirect::to('/login');
              }
      }

    public function registration(){
            return view('user.registration');
    }
    public function save_registration(Request $request){
      $reg=array();
           $reg['fname']=$request->fname;
           $reg['lname']=$request->lname;
           $reg['email']=$request->email;
           $reg['password']=$request->password;
           $reg['phone']=$request->phone;
              DB::table('tbl_registration')->insert($reg);
              return Redirect::to('/');
    }
    public function post_upload(){
      return view('user.post_upload');
    }
    public function post_save(Request $request){
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
                        DB::table('tbl_user_post')->insert($status);
                        return redirect()->back();
                                      }
                           }




                         }


            public function available_house(){
              $all_user_post_show=DB::table('tbl_user_post')
                            ->get();
              $all_post_mng=view('user.available_house')
                            ->with('all_user_post_show',$all_user_post_show);
              return view('user_home')
                            ->with('user.available_house',$all_post_mng);
            }


            public function details_post_show($user_post_id){
                    $id_post_show=DB::table('tbl_user_post')
                                ->where('user_post_id',$user_post_id)
                                ->first();
                    $all_post_mg=view('user.details_post_show')
                                ->with('id_post_show',$id_post_show);
                    return view('user_home')
                                ->with('user.details_post_show',$all_post_mg);

            }

}
