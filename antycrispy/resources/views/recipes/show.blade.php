@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <h2 class="flow-text">{{$recipe->title}}</h2>
            <div class="card">
                <div class="card-image">
                    <img class="materialboxed responsive-img" src="{{url('storage/recipes/'.$recipe->recipe_image)}}">
                    <a href="/recipes/{{$recipe->id}}/edit" class="orange halfway-fab waves-effect btn-floating"><i class="material-icons">edit</i></a>
                </div>
                <div class="card-stacked">
                <div class="card-content">
                    <span class="card-title">{{$recipe->description}}</span>
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
                    @if ($recipe->recipe_tags)
                        @foreach (json_decode($recipe->recipe_tags) as $recipe_tags)
                            <span class="new badge cyan" data-badge-caption="{{$recipe_tags->tag}}"></span>
                        @endforeach
                    @endif
                    <a class="right" href="/recipes/{{$recipe->id}}/tutorials/create">Create Video</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.materialboxed').materialbox();
</script>
@endsection