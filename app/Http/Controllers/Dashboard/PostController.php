<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $data = DB::table('post')->where('category_id','1')->orderBy('title')->pluck('title', 'slug');
        $data = DB::table('post')->count();
        $dataFilter1 = DB::table('post')->where('category_id','1')->count();
        $dataFilter2 = DB::table('post')->where('category_id','2')->count();

        $join = DB::table('post')->join('categories', 'post.category_id', '=', 'categories.id')->select('post.title','post.slug','post.content', 'categories.title as titlec')->orderBy('post.title', 'ASC')->cursorPaginate(10);

        // ESTE ES UN EJEMPLO DE COMO BUSCAR POR CUALQUIER CAMPO
        // $users = DB::table('users')->where('active', true)->whereAny(['name','email','phone',], 'LIKE', 'Example%')->get();

        $posts = Post::Paginate(10);
        return view('dashboard.post.index', compact('posts','data', 'dataFilter1', 'dataFilter2', 'join'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::get();
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact('categories','post'));
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
        return to_route('post.index')->with('status','Registro creado');


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {

        $data = $request->validated();
        if (isset($data['image'])) {
            # code...
            //dd($request->validated()['image']->extension());
            $pathFile = "/Images/Post/";
            $pathSave = "Images/Post/";
            $filename = 'IMG_POST_'.time().'.'.$data['image']->extension();
            $data['image'] = $pathFile.$filename;
            //dd($data['image']);
            $request->image->move(public_path($pathSave), $filename);
            
        }

        $post->update($data);

        //$request->session()->flash('status','Registro actualizado');
        return to_route('post.index')->with('status','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status','Registro eliminado');
    }
}