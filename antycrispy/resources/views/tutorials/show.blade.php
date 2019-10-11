@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <h2 class="flow-text">From Recipe: {{$recipe->title}}</h2>
            <div class="card">
                <div class="card-image">
                    <div class="video-block">
                        <video class="video-js" width="100%" controls controlsList="nodownload">
                            <source src="{{url('storage/recipes/recipe'.$tutorial->recipe_id.'_video/'.$tutorial->recipe_video)}}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="activator card-title">{{$tutorial->title}}<i class="orange-text material-icons right">more_vert</i></span>
                        <p class="truncate">{{$tutorial->description}}</p>
                    </div>
                
                {{-- <div class="card-action">
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
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.materialboxed').materialbox();
</script>
@endsection