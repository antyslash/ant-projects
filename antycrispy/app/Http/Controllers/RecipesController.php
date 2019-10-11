<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
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
            'title' => ['required', 'min:3', 'max:255'],
            'description'   => ['max:255'],
            'method'    => ['required', 'min:3'],
            'recipe_tags'    => ['max:255'],
            'recipe_image_upload'    =>  'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'recipe_image'   =>  'required'
        ]);
        if ($request->file('recipe_image_upload')->isValid()) {
            if(Recipe::create($request->except('recipe_image_upload'))) {
                $request->file('recipe_image_upload')->storeAs('public/recipes', $request->recipe_image);
            }
        }
        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description'   => ['max:255'],
            'method'    => ['required', 'min:3'],
            'recipe_tags'    => ['max:255'],
            //'recipe_image_upload'    =>  'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'recipe_image'   =>  'required'
        ]);
        // if(Storage::disk('s3')->exists('public/recipes/'.$request->recipe_image)) {
        //     Storage::disk('s3')->delete('public/recipes/'.$request->recipe_image);
        //     $request->file('recipe_image_upload')->storeAs('public/recipes', 'recipe'.$recipe->id.'_'.$request->recipe_image);
        // }
        $recipe->update($request->except('recipe_image_upload'));
        return redirect('/recipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('/recipes');
    }
}
