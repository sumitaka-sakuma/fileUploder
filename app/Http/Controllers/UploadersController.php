<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploader;

class UploadersController extends Controller
{
    public function index(){

        $uploader = Uploader::orderBy('created_at', 'desc')->paginate(5);
        return view('uploaders/index', compact('uploader'));
    }
}
