<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
    }

    /**
     * Show the application video.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::all();
        $videos = Video::all();
        return view('videos', compact('users', 'videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('videosnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Auth::user()->name == $user['name']) {
                $userID = $user['id'];
            }
        }

        $path = $request->file('video')->store('videos', 'public');
        Video::create(
            [
                'title' => $request->title,
                'route' => $path,
                'user_id' => $userID
            ]
        );
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $videos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::find($id);
        $users = User::all();
        return view('videosview', compact('video', 'users'));
    }

    public function score($id)
    {
        $video = Video::find($id);
        $users = User::all();
        return view('videosscore', compact('video', 'users'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        $users = User::all();
        return view('videosedit', compact('video', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $video = Video::find($id);

        if (!empty($request->file('video'))) {
            $path = $request->file('video')->store('videos', 'public');
        } else {
            $path = $video->route;
        }

        $video->update([
            'title' => $request->title,
            'route' => $path,
        ]);

        return redirect()->route('video.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::destroy($id);
        return redirect()->route('video.index');
    }
}
