<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- video.js plugin for displaying video -->
    <link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <!-- end of video.js -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="{{url('asset/css/style.css')}}">
    <title>@yield('title', 'AntyCrispy')</title>
</head>
<body>
    <header>
        <nav class="white">
            <div class="nav-wrapper navbar-fixed container">
                <a href="/" class="brand-logo">AntyCrispy</a>
                <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/"><i class="left material-icons">home</i>Home</a></li>
                    <li><a href="/recipes"><i class="left material-icons">book</i>Recipes</a></li>
                    <li><a href="/tutorials"><i class="left material-icons">video_library</i>Tutorial</a></li>
                    <li><a href="/contact"><i class="left material-icons">contact_support</i>Contact</a></li>
                    {{-- <li><a class="btn-floating pulse cyan" href="/recipes/create"><i class="tiny material-icons">edit</i></a></li> --}}
                </ul>
            </div>
            <ul class="sidenav" id="mobile-menu">
                <li><a href="/"><i class="left material-icons">home</i>Home</a></li>
                <li><a href="/recipes"><i class="left material-icons">book</i>Recipes</a></li>
                <li><a href="/tutorials"><i class="left material-icons">video_library</i>Tutorial</a></li>
                <li><a href="/contact"><i class="left material-icons">contact_support</i>Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        {{-- <div class="container"> --}}
            <!-- Preloader and it's background. -->
            <div class="preloader-background">
                <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                  <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                  <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                  <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div><div class="gap-patch">
                      <div class="circle"></div>
                    </div><div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
              <p class="blinking">Loading</p>
            </div>
            @yield('content')
        {{-- </div> --}}
    </main>
    <footer class="deep-orange accent-3 page-footer">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    {{-- <h5 class="white-text">AntyCrispy</h5> --}}
                    <p class="grey-text text-lighten-4">
                        Find and share everyday cooking inspiration on AntyCrispy. Discover recipes, cooks, videos, and how-tos based on the food you love and the friends you follow.
                    </p>
                </div>
                <div class="col offset-l2 l2 s6">
                    <h5 class="white-text">Learn</h5>
                    <ul>
                      <li><a class="grey-text text-lighten-3" href="/recipes">Recipes</a></li>
                      <li><a class="grey-text text-lighten-3" href="/tutorials">Tutorial</a></li>
                      <li><a class="grey-text text-lighten-3" href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col l2 s6">
                    <h5 class="white-text">Share</h5>
                    <ul>
                      <li><a class="grey-text text-lighten-3" href="/recipes">Recipes</a></li>
                      <li><a class="grey-text text-lighten-3" href="/tutorials">Tutorial</a></li>
                      <li><a class="grey-text text-lighten-3" href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col l2 s12">
                    <h5 class="white-text">Social Media</h5>
                    <ul>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © {{date('Y')}} All Rights Reserved
                {{-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> --}}
            </div>
        </div>
    </footer>
    <div class="fixed-action-btn">
        <a href="/recipes/create" class="btn-floating btn-large red pulse">
            <i class="large material-icons">mode_edit</i>
        </a>
    </div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').fadeOut();
});
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.fixed-action-btn').floatingActionButton();
});
</script>
</html>