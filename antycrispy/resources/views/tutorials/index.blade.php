@extends('layout')

@section('content')
<div class="container">
    <h2 class="header flow-text">Tutorials</h2>
    <div class="row">
        @foreach ($tutorials as $tutorial)
            <div class="col s12 m4">
                <div class="card hoverable sticky-action">
                    <div class="card-image">
                        <div class="video-block">
                            <video class="video-js" width="100%" controls controlsList="nodownload">
                                <source src="{{url('storage/recipes/recipe'.$tutorial->recipe_id.'_video/'.$tutorial->recipe_video)}}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="activator card-title">{{$tutorial->title}}<i class="orange-text material-icons right">more_vert</i></span>
                        <p class="truncate">{{$tutorial->description}}</p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$tutorial->title}}<i class="material-icons right">close</i></span>
                        <p>{{$tutorial->description}}</p>
                    </div>
                    <div class="card-action">
                        <a class="" href="/recipes/{{$tutorial->recipe_id}}/tutorials/{{$tutorial->id}}">
                            Edit
                        </a>
                        {{-- <a href="#" class="thumb-up">
                            <i class="orange-text material-icons">favorite_border</i>
                            <span class="badge" data-badge-caption="{{$recipe->thumbups}}"></span>
                        </a>
                        <a href="#" class="thumb-down">
                            <i class="orange-text material-icons">share</i>
                            <span class="badge" data-badge-caption="{{$recipe->shares}}"></span>
                        </a>
                        @if (count(json_decode($recipe->dish_tags)) >= 2)
                            <!-- print the first two tags only -->
                            @for ($i = 0; $i < 2; $i++)
                                <span class="new badge cyan" data-badge-caption="{{json_decode($recipe->dish_tags)[$i]->tag}}"></span>
                            @endfor
                        @else 
                            @foreach (json_decode($recipe->dish_tags) as $dish_tags)
                                <span class="new badge cyan" data-badge-caption="{{$dish_tags->tag}}"></span>
                            @endforeach
                        @endif --}}
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
$(document).ready(function(){
    
});
</script>
@endsection