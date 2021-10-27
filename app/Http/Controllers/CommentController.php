<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comment::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comment::create([
            "user_id"=>$request->user_id,
            "podcast_id"=>$request->podcast_id,
            "blog_id"=>$request->blog_id,
            "message"=>$request->message
        ]);
        return response()->json(["message"=>"Comment Created", "status"=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($comment)
    {

        $result= Comment::find($comment);

        if($result){
            return $result;
        }else{
            return response()->json(["message"=>"Comment not found", "status"=>404]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comment)
    {
        Comment::find($comment)->update($request->all());

        return response()->json(["message"=>"Comment Updated", "status"=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($comment)
    {
        Comment::find($comment)->delete();
        return response()->json(["message"=>"Comment Deleted", "status"=>200]);
    }
}
