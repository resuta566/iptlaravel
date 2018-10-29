<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comments;
use App\Http\Resources\Comments as CommentsResource;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comments::all();
        return CommentsResource::collection($comments);
        
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
        $comments = $request->isMethod('put') ? Comments::findOrFail($request->id) : new Comments;

        $comments->id = $request->input('id');
        $comments->lname = $request->input('lname');
        $comments->fname = $request->input('fname');
        $comments->address = $request->input('address');
        $comments->gender = $request->input('gender');
        $comments->course = $request->input('course');
        $comments->year = $request->input('year');

        if($comments->save()){
            return new CommentsResource($comments);
        }


        return new Comments($comments);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comments::findOrFail($id);
        return new CommentsResource($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $comments = Comments::findOrFail($id);
        if($comments->delete()) {
            return new CommentsResource($comments);
        }
    }
}
