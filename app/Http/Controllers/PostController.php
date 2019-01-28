<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function Index(){
        return View("post.index");
    }
    //get
    public function Add(){
        $all_category = [
            1=>'Cat 1',
            2=>'Cat 2',
            3=>'Cat 3',
        ];
        $view_data = [
            'all_category'=>$all_category
        ];
        return View("post.add",$view_data);
    }
    //post
    public function AddProccess(Request $request){
        //lay form value
        $email = $request->get('email');
        $category = $request->get('category');
        var_dump($request->has('email'));
        var_dump($request->has('email'));
        //return redirect("post/index");
    }
}
