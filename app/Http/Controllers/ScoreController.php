<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $scores = Score::all();
        $videos= Video::all();
        return view('home',compact('users','videos','scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('score.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Score::create(
            ['score'=>$request->rating,
                'user_id'=>$request->user_id,
                'video_id'=>$request->video_id,
            ]);
        return redirect()->route('score.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function show(scores $scores)
    {
        return redirect()->route('score.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $score=Score::find($id);
        return redirect()->route('score.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scores $scores)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scores  $scores
     * @return \Illuminate\Http\Response
     */
    public function destroy(scores $scores)
    {
        //
    }
}
