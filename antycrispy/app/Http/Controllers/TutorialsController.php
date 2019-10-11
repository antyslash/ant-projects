<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Tutorial;
use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorial = Tutorial::all();
        return view('tutorials.index', compact('tutorial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Recipe $recipe)
    {
        return view('tutorials.create', compact('recipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'recipe_id' => 'required',
            'title' =>  'required|min:3',
            'description'   =>  'max:255',
            'recipe_video_upload'   =>  'required|mimes:mp4,mov,avi,flv|max:2048',
            'recipe_video'   =>  'required'
        ]);
        if ($request->file('recipe_video_upload')->isValid()) {
            if(Tutorial::create($request->except('recipe_video_upload'))) {
                $request->file('recipe_video_upload')->storeAs('public/recipes/recipe'.$request->recipe_id.'_video', $request->recipe_video);
            }
        }
        return redirect('/tutorials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe, Tutorial $tutorial)
    {
        //$tutorial_arr = Tutorial::findOrFail($tutorial->recipe_id);
        return view('/tutorials/show', compact(['tutorial', 'recipe']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorial $tutorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial)
    {
        //
    }
}
