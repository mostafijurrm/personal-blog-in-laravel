<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StoreCategoryController extends Controller
{
    public function StoreCategory (Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category=DB::table('categories')->insert($data);
        if ($category) {
            $notification=array(
                'message'=>'Successfully Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('write.post')->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
