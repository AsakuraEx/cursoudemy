<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "index";
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::get();
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.create', compact('categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        //$validated = $request->validate(StoreRequest::myRules());

        //dd($request->all());
        //dd($validated);
        //$data = array_merge($request->all(), ['image' => ' ']);

        //$validated = Validator::make($request->all(),StoreRequest::myRules());
        //dd($validated->errors());

        // $data = $request->validated();
        // $data['slug'] = Str::slug($data['title']);
        // dd($data);

        //Post::create($request->all());
        Post::create($request->validated());
        //return to_route('post.create');


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
