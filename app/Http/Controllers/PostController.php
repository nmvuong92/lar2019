<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function Index(){
        return View("post.index");
    }
    public function Add(){
        
    }
}
