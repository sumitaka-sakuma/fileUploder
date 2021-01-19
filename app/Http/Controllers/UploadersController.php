<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploader;

class UploadersController extends Controller
{
    public function index(){

        $uploader = Uploader::all();
        return view('uploaders/index', compact('uploader'));
    }
}
