<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function AddCategory ()
    {
        return view('posts.addcategory');
    }
}
