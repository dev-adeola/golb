<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Headline;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function createPost(Request $request) {
        $validation = Validator::make($request->all(), [
            'title'         =>  ['required', 'string'],
            'meta_title'    =>  ['required', 'string'],
            'content'       =>  ['required', 'string'],
            'summary'       =>  ['required', 'string'],  //
            'author_id'     =>  ['required'],
            'category_id'   =>  ['required'],
            'subcategory_id' => ['required'],
            'featured_image' => ['required', 'string'],
            "post_tags"    => ['required', 'string'],
        ]);

        if($validation->fails()) {
            return response()->json(['error' => $validation->errors()]);
        }


        $author = Author::where('id', $request->author_id)->first();

        $post = $author->post()->create([
            'title'         =>   $request->title,
            'meta_title'    =>   $request->meta_title,
            'slug'          =>   Str::slug($request->title),
            'content'       =>   $request->content,
            'summary'       =>   $request->summary,  
            'author_id'     =>   $request->author_id,
            'category_id'   =>   $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'featured_image'    => $request->featured_image,
            "post_tags" => $request->post_tags
        ]);

        $post->headline()->create([
            'title' => $request->title
        ]);

        $post->postmeta()->create([
            'key' => $request->post_tags,
            'content' => $request->content
        ]);

        $post->tag()->create([
            'category_id' => $request->category_id, 
	        'slug' => Str::slug($request->meta_title),		
	        'content' => $request->post_tags
        ]);

        return response()->json(['status' => 'success', 'post' => $post->load(['tag'])]);
    }
}
