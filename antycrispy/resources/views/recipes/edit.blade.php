@extends('layout')

@section('content')
<div class="container">
    <h2 class="flow-text">Edit Recipe</h2>
    <div class="row">
        <form class="col s12" method="post" action="/recipes/{{$recipe->id}}">
            @csrf
            @method('patch')
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">title</i>
                    <input id="title" type="text" class="validate" name="title" data-length="20" required value="{{$recipe->title}}">
                    <label for="title">Title</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <textarea id="desc" class="materialize-textarea validate" name="description">{{$recipe->description}}</textarea>
                    <label for="desc">Description</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">book</i>
                    <textarea id="method" class="materialize-textarea validate" name="method"required>{{$recipe->method}}</textarea>
                    <label for="method">Method</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
                <div class="col s6">
                    <div class="chips chips-autocomplete"></div>
                    <input type="hidden" name="recipe_tags" id="recipe_tags" value="{{$recipe->recipe_tags}}">
                    <span class="helper-text" data-error="wrong" data-success="right">Tags can let people find your recipe more easily</span>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn disabled">
                        <span>Photo</span>
                        <input type="file" name="recipe_image_upload" id="recipe_image_upload" disabled>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" name="recipe_image" type="text" value="{{$recipe->recipe_image}}" readonly>
                    </div>
                </div>
            </div>
            <button class="btn waves-effect waves-light orange" type="submit">
                Update
                <i class="material-icons right">send</i>
            </button>
        </form>
        <form class="col s12" action="/recipes/{{$recipe->id}}" method="post" style="padding-top:10px;" onsubmit="return confirm('Are you sure to delete this recipe?');">
            @csrf
            @method('delete')
            <button class="btn waves-effect waves-light red" type="submit">
                Delete
                <i class="material-icons right">delete</i>
            </button>
        </form>
        @include('errors')
    </div>
</div>
    <script>
    $(document).ready(function() {
        $('input#title').characterCounter();
        $('.chips-autocomplete').chips({
            data: JSON.parse($('#recipe_tags').val()),
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
    })
    </script>
@endsection