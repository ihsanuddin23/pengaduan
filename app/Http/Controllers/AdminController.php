<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminView()
    {
        return view('admin.v_admin');
    }
}