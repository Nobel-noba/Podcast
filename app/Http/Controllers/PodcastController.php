<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Podcast::paginate(10);
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
        //
        Podcast::create($request->all());
        return response()->json(["message"=>"Podcast Created", "status"=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show( $podcast)
    {
        //
        $result= Podcast::find($podcast);
        if($result){
            return $result;
        }else{
            return response()->json(["message"=>"Podcast not found", "status"=>400]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $podcast)
    {
        //
        Podcast::find($podcast)->update($request->all());
        return response()->json(["message"=>"Podcast Updated", "status"=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy( $podcast)
    {
        Podcast::find($podcast)->delete();
        return response()->json(["message"=>"Podcast Deleted", "status"=>200]);
    }
}
