<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function show_dashboard(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            $request->session()->put('admin_id', $result->admin_id);
            $request->session()->put('admin_name', $result->admin_name);

            return redirect('/dashboard');
        }else{
            $request->session()->flash('message', 'Email or Password Invalid');
            return redirect()->route('admins');
        }
    }
}
