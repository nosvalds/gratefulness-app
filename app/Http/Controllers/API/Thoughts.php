<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Thought;
use App\Http\Requests\API\ThoughtRequest;

class Thoughts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all thoughts
        return Thought::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThoughtRequest $request)
    {
        // store a new thought

        // get request data
        $data = $request->all();

        // create article with data and store in DB
        // and return it as JSON
        return Thought::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Thought $thought)
    {
        // return the thought with that ID using Route Model Binding
        return $thought;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ThoughtRequest $request, Thought $thought)
    {
        // get request data
        $data = $request->all();

        // update using fill and save to DB
        $thought->fill($data)->save();

        //return updated version
        return $thought;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thought $thought)
    {
        // delete from DB
        $thought->delete();

        // return 204
        return response(null, 204);
    }
}
