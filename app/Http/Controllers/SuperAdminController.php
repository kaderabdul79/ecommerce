<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard(){
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }

    public function logout(){
        session()->flush();
        // dd(session()->get(('admin_id')));
        return redirect('admins');
    }

    public function AdminAuthCheck(){
        $admin_id = session()->get(('admin_id'));
        // dd($admin_id);
        if($admin_id){
            return true;
        }else{
            return redirect('admins');
        }
    }
}
