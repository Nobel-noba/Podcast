<?php

namespace App\Http\Controllers;

use App\Models\Saved;
use Illuminate\Http\Request;

class SavedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Saved::paginate(10);
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
        Saved::create($request->all());

        return response()->json(["message"=>"Saved Created", "status"=>200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saved  $saved
     * @return \Illuminate\Http\Response
     */
    public function show( $saved)
    {
        //
        $result= Saved::find($saved);
        if($result){
            return $result;
        }else{
            return response()->json(["message"=>"Saved not found", "status"=>400]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saved  $saved
     * @return \Illuminate\Http\Response
     */
    public function edit(Saved $saved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saved  $saved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $saved)
    {
        //
        Saved::find($saved)->update($request->all());

        return response()->json(["message"=>"Saved Updated", "status"=>200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saved  $saved
     * @return \Illuminate\Http\Response
     */
    public function destroy( $saved)
    {
        //
        Saved::find($saved)->delete();

        return response()->json(["message"=>"Saved Deleted", "status"=>200]);
    }
}
