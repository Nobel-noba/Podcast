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
        return Blog::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Blog::create([
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>$request->user_id,
            "cover_picture"=>$request->cover_picture
        ]);

        return response()->json(["message"=>"Blog Created", "status"=>200]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        $result= Blog::find($blog);

        if($result){
            return $result;
        }else{
            return response()->json(["message"=>"Blog not found", "status"=>404]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        Blog::find($blog)->update($request->all());

        return response()->json(["message"=>"Blog Updated", "status"=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        Blog::find($blog)->delete();
        return response()->json(["message"=>"Blog Deleted", "status"=>200]);

    }
}
