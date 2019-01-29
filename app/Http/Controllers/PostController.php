<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Post;

class PostController extends Controller
{
    public function Index(){
        $all_product = Post::all();
        return View("post.index",[
            'all_product'=>$all_product
        ]);
    }
    //@get
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
    //@post
    public function AddProccess(Request $request){
        //lay form value
        $title = $request->get('title');
        $content = $request->get('content');
        $category_id = $request->get('category_id');
        $description = $request->get('description');

        $post = new Post();
        $post->content = $content;
        $post->title = $title;
        $post->category_id = $category_id;
        $post->description = $description;
        //var_dump($post->save());
        $post->save();
        return redirect("post/index");
    }

    //@delete
    public function DeleteProccess($id){
        $post = Post::find($id);
        $post->delete();
        return redirect("post/index");
    }

    //@get
    public function Update($id){

    }
}
