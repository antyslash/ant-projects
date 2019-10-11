@extends('layout')

@section('content')
<div class="slider fullscreen">
    <ul class="slides">
        <li>
            <img src="{{url('asset/images/banner3.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
                <h3>You can find any recipes here!</h3>
                <h5 class="light blue-text">Search recipes to start your journey</h5>
            </div>
        </li>
        <li>
            <img src="{{url('asset/images/banner2.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
                <h3>You can find your foodies to cook together here!</h3>
                <h5 class="light blue-text">Add some friends to start your journey</h5>
            </div>
        </li>
        <li>
            <img src="{{url('asset/images/banner1.jpg')}}"> <!-- random image -->
            <div class="caption left-align">
                <h3>You can learn how to cook here!</h3>
                <h5 class="light blue-text">Watch tutorial to start your journey</h5>
            </div>
        </li>
        <li>
            <img src="{{url('asset/images/banner4.jpg')}}"> <!-- random image -->
            <div class="caption right-align">
                <h3>You can create your own tutorial here!</h3>
                <h5 class="light blue-text">Let's create your own recipe</h5>
            </div>
        </li>
    </ul>
</div>
    {{-- <div class="parallax-container">
        <div class="parallax"><img src="https://lorempixel.com/800/400/food/1"></div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="https://lorempixel.com/800/400/food/2"></div>
    </div> --}}
{{-- <div class="section white">
    <div class="row container">
        <h2 class="header">Welcome</h2>
        <p class="grey-text text-darken-3 lighten-3">Find and share everyday cooking inspiration on AntyCrispy. Discover recipes, cooks, videos, and how-tos based on the food you love and the friends you follow.</p>
    </div>
</div> --}}
<script>
$('.slider').slider({
    indicators: true
});
//$('.parallax').parallax();
</script>
@endsection