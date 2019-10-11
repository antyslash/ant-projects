@extends('layout')

@section('content')
<div class="container">
    <h2 class="flow-text">Create Recipe</h2>
    <div class="row">
        <form class="col s12" method="post" action="/recipes" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">title</i>
                    <input id="title" type="text" class="validate" name="title" data-length="20" value="{{old('title')}}" required>
                    <label for="title">Title</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">description</i>
                    <textarea id="desc" class="materialize-textarea validate" name="description">{{old('description')}}</textarea>
                    {{-- <input id="desc" type="text" class="validate" name="description" required> --}}
                    <label for="desc">Description</label>
                    {{-- <span class="helper-text" data-error="Please fill in" data-success="">Required</span> --}}
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 m12">
                    <i class="material-icons prefix">book</i>
                    <textarea id="method" class="materialize-textarea validate" name="method" required>{{old('method')}}</textarea>
                    <label for="method">Method</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
                <div class="col l6 s12">
                    <div class="chips chips-autocomplete"></div>
                    <input type="hidden" name="recipe_tags" id="recipe_tags" value="">
                    <span class="helper-text" data-error="wrong" data-success="right">Tags can let people find your recipe more easily</span>
                </div>
                {{-- <div class="input-field col s6">
                    <select multiple>
                        <option value="" disabled selected>Which style(s) your dish belongs to?</option>
                        <option value="Chinese">Chinese Style</option>
                        <option value="West">Western Style</option>
                        <option value="Others">Others</option>
                    </select>
                    <label>Dish Style</label>
                    <input type="hidden" name="recipe_style" id="recipe_style">
                </div> --}}
            </div>
            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Photo</span>
                        <input type="file" name="recipe_image_upload" id="recipe_image_upload" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="recipe_image" type="text" placeholder="File can be either jpg / jpeg / png / gif">
                    </div>
                </div>
            </div>
            <button class="orange btn waves-effect waves-light" type="submit">
                Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
        @include('errors')
    </div>
</div>
<script>
$(document).ready(function() {
    $('input#title').characterCounter();
    $('.chips-autocomplete').chips({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Tag',
        autocompleteOptions: {
            data: {
                'Easy': null,
                'Steam': null,
                'Fry': null,
                'Roast': null,
                'Boil': null,
                'Bake': null
            },
        },
        limit: 4
    });
    $('form').on('submit', function() {
        $('#recipe_tags').val(JSON.stringify(M.Chips.getInstance($('.chips-autocomplete')).chipsData));
    })
    // $('select').formSelect();
    // $('select').on('change', function() {
    //     $('#recipe_style').val($('select').val())
    // })
})
</script>
@endsection