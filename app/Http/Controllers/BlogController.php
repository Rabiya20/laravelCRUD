<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=new Blog; // create new instance
        // use instance     field name      request method to get data which name is 'title'
        $blog->blog_title=$request->get('title');
        $blog->blog_author=$request->get('author');
        $blog->blog_category=$request->get('category');
        $blog->save(); //function to save data

        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // create variable      write instance name that created in store()
        $all_blogs = Blog::all();
        return view('show',['blogs'=>$all_blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blogs=Blog::find($id);
        return view('edit',['blogs'=>$blogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $update=Blog::find($id);
        $update->blog_title=$request->get('title');
        $update->blog_author=$request->get('author');
        $update->blog_category=$request->get('category');

        $update->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id) // added id var for deleteing ddata with ID
    {
        $delete = Blog::find($id);
        $delete->delete();
        return redirect('show');
    }
}
