<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class adminController extends Controller
{

    public function index(){
      return view('admin.admin_login');
    }
    public function admin_login(Request $request){
      $email=$request->email;
      $password=$request->password;

        $login= DB::table('tbl_admin')
                ->where('admin_email',$email)
                ->where('admin_password',$password)
                ->first();
            if ($login) {
              Session('admin_name',$login->admin_name);
              Session('admin_id',$login->admin_id);
              return Redirect::to('/deshbord');
            }
            else {
              return Redirect::to('/admin_login');
            }
    }
    public function deshbord(){
      return view('admin.deshbord');
    }
    public function Logout(){
      Session::flush();
      return Redirect::to('/admin');
    }


}
