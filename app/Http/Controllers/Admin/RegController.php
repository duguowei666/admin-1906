<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function reg(){
        return view('reg.list');
    }
    public function do_reg(){
        echo 111;
    }
}
