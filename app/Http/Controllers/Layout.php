<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Layout extends Controller
{
    public function index(){
        return view('template');
    }
}
