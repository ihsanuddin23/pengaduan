<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function UsersView()
    {
        return view('admin.v_admin');
    }
}