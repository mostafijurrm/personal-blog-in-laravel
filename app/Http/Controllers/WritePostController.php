<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WritePostController extends Controller
{
    public function WritePost()
    {
        return view('posts.writepost');
    }
}
