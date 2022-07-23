<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
	//Create a view of products

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request){
        $post = new Products();
        $post->author = $request->author;
        $post->prod_name = $request->prod_name;
        $post->prod_description = $request->prod_description;
        $post->save();
        return redirect()->route('products.list');

    }

    public function list()
    {
        $posts = Products::orderBy('id','desc')->get();
        return view('products.list',compact('products'));
    }
    public function view($id){
        $post_detail = Products::with('review_ratings')->find($id);
        return view('products.view',compact('products_detail'));
    }

     public function reviewstore(Request $request){
        $review = new Ratings();
        $review->post_id = $request->post_id;
        $review->name    = $request->name;
       $review->star_rating = $request->rating;
        $review->save();
        return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    }
    
}
