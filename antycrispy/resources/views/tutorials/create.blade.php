@extends('layout')

@section('content')
<div class="container">
    <h2 class="flow-text">Create Tutorial for {{$recipe->title}}</h2>
    <div class="row">
        <form class="col s12" method="post" action="/recipes/{{$recipe->id}}/tutorials" enctype="multipart/form-data">
            @csrf 
            <input type="hidden" value="{{$recipe->id}}" name="recipe_id">
            <div class="row">
                <div class="input-field col s6">
                    <input id="title" type="text" class="validate" name="title" data-length="20" value="{{old('title')}}" required>
                    <label for="title">Title</label>
                    <span class="helper-text" data-error="Please fill in" data-success="">Required</span>
                </div>
                <div class="input-field col s6">
                    <textarea id="desc" class="materialize-textarea validate" name="description">{{old('description')}}</textarea>
                    {{-- <input id="desc" type="text" class="validate" name="description" required> --}}
                    <label for="desc">Description</label>
                    {{-- <span class="helper-text" data-error="Please fill in" data-success="">Required</span> --}}
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>Video</span>
                        <input type="file" name="recipe_video_upload" id="recipe_video_upload">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="recipe_video" type="text" placeholder="File can be either MP4 / Ogg / WebM">
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
    //     $('#dish_style').val($('select').val())
    // })
})
</script>
@endsection