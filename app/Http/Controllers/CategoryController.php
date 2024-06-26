<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function createCategory(Request $request) {

        $validation = Validator::make($request->all(), [
            'title'         => ['required', 'string'],
            'content'       => ['required', 'string'],
            'slug'          => ['required', 'string'],
            'meta_title'    => ['required', 'string'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::create([
            'title'         => $request->title,
            'content'       => $request->content,
            'slug'          => $request->slug,
            'meta_title'    => $request->meta_title
        ]);

        return response()->json(['status'   => 'success', 'data' => $data]);
    }

    public function updateCategory(Request $request) {
        $validation = Validator::make($request->all(), [
            'id'            => ['required'],
            'title'         => ['required', 'string'],
            'content'       => ['required', 'string'],
            'slug'          => ['required', 'string'],
            'meta_title'    => ['required', 'string'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::where('id', $request->id)->update([
            'title'         => $request->title,
            'content'       => $request->content,
            'slug'          => $request->slug,
            'meta_title'    => $request->meta_title
        ]);

        return response()->json(['status'   => 'updated', 'data' => $data]);
    }

    public function deleteCategory(Request $request) {
        $validation = Validator::make($request->all(), [
            'id'            => ['required'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::where('id', $request->id)->delete();

        return response()->json(['status'   => 'deleted', 'data' => $data]);
    }

    public function createSubcategory(Request $request) {
        $validation = Validator::make($request->all(), [
            'id'            => ['required'],
            'title'         => ['required', 'string'],
            'content'       => ['required', 'string'],
            'slug'          => ['required', 'string'],
            'meta_title'    => ['required', 'string'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::create([
            'parent_id'     => $request->id,
            'title'         => $request->title,
            'content'       => $request->content,
            'slug'          => $request->slug,
            'meta_title'    => $request->meta_title
        ]);

        return response()->json(['status'   => 'updated', 'data' => $data]);
    }

    public function updateSubcategory(Request $request) {
        $validation = Validator::make($request->all(), [
            'id'            => ['required'],
            'title'         => ['required', 'string'],
            'content'       => ['required', 'string'],
            'slug'          => ['required', 'string'],
            'meta_title'    => ['required', 'string'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::where('parent_id', $request->id)->update([
            'title'         => $request->title,
            'content'       => $request->content,
            'slug'          => $request->slug,
            'meta_title'    => $request->meta_title
        ]);

        return response()->json(['status'   => 'updated', 'data' => $data]);
    }

    public function deleteSubcategory(Request $request) {
        $validation = Validator::make($request->all(), [
            'id'            => ['required'],
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()]);
        }

        $data = Category::where('parent_id', $request->id)->delete();

        return response()->json(['status'   => 'deleted', 'data' => $data]);
    }

    public function fetchGategory(){
        $data = Category::all();
        return response()->json(['cat' => $data]);
    }
}
