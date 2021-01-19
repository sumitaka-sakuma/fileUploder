<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadersController extends Controller
{
    public function index(){

        return view('uploaders/index');
    }
}
