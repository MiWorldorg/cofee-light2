<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tet extends Controller
{
    public function index(){
        return view("admin.layouts.master");
    }
}
