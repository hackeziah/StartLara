<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); 
        //return view('companies.index',['posts'=>$posts]);
        // return view('posts.index',['posts'=>$posts]);
          return view('posts.index', compact('posts'));
        // echo $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $cat = Category::all(); 
          return view('posts.create',compact('cat'));
       
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // return redirect()->intended('/posts.create');
        // dd($request);
        // return Post::create([
        //     'title' => $request['title'],
        //     'body' => $request['body'],
        //     'category' => $request['category'],
            
        // ])->redirect('/posts');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        // Redirect to state list if updating state wasn't existed
        // if ($employee == null || count($employee) == 0) {
        //     return redirect()->intended('/employee-management');
        // }
        $divisions = Post::all();
        return view('posts.index',['posts'=>$posts]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
