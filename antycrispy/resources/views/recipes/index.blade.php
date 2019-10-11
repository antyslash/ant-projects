@extends('layout')

@section('content')
<div class="container">
    <h2 class="header flow-text">Recipes</h2>
    <div class="row">
        @foreach ($recipes as $recipe)
            <div class="col s12 m4">
                <div class="card hoverable sticky-action">
                    <a href="/recipes/{{$recipe->id}}">
                        <div class="card-image">
                            <img src="{{url('storage/recipes/'.$recipe->recipe_image)}}">
                        </div>
                    </a>
                    <div class="card-content">
                        <span class="activator card-title">{{$recipe->title}}<i class="orange-text material-icons right">more_vert</i></span>
                        <p class="truncate">{{$recipe->description}}</p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$recipe->title}}<i class="material-icons right">close</i></span>
                        <p>{{$recipe->method}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="thumb-up">
                            <i class="orange-text material-icons">favorite_border</i>
                            <span class="badge" data-badge-caption="{{$recipe->thumbups}}"></span>
                        </a>
                        <a href="#" class="thumb-down">
                            <i class="orange-text material-icons">share</i>
                            <span class="badge" data-badge-caption="{{$recipe->shares}}"></span>
                        </a>
                        @if (count(json_decode($recipe->recipe_tags)) >= 2)
                            <!-- print the first two tags only -->
                            @for ($i = 0; $i < 2; $i++)
                                <span class="new badge cyan" data-badge-caption="{{json_decode($recipe->recipe_tags)[$i]->tag}}"></span>
                            @endfor
                        @else 
                            @foreach (json_decode($recipe->recipe_tags) as $recipe_tags)
                                <span class="new badge cyan" data-badge-caption="{{$recipe_tags->tag}}"></span>
                            @endforeach
                        @endif
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