<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Channel::all();
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
        Channel::create([
            "user_id"=>$request->user_id,
            "channel_name"=>$request->channel_name,
            "cover_photo"=>$request->cover_photo,
            "bio"=>$request->bio
        ]);
        return response()->json(["message"=>"Channel Created", "status"=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function show( $channel)
    {
        $result= Channel::find($channel);

        if($result){
            return $result;
        }else{
            return response()->json(["message"=>"Channel not found", "status"=>404]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $channel)
    {
        Channel::find($channel)->update($request->all());

        return response()->json(["message"=>"Channel Updated", "status"=>200]);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function destroy($channel)
    {
        Channel::find($channel)->delete();
        return response()->json(["message"=>"Channel Deleted", "status"=>200]);
        }
}
