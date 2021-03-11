<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\{Auth, Hash};
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginView(){
        return view('auth.v_login');
    }

    public function LoginProcess(Request $request)
    {
        $loginTypeMasyarakat = [
            'username' => $request->username,
            'password' => $request->password 
        ];

        $loginTypeAdmin = [
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'admin'
        ];

        $loginTypePetugas = [
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'petugas'
        ];

        // var_dump($loginTypeMasyarakat); die;

        if(Auth::guard('masyarakat')->attempt($loginTypeMasyarakat)) {
            echo "masyarakat";
        }elseif (Auth::guard('petugas')->attempt($loginTypeAdmin)) {
            echo "admin";
        }elseif (Auth::guard('petugas')->attempt($loginTypePetugas)) {
            echo "petugas";
        }else{
            echo "gagal";
        }
    }
}