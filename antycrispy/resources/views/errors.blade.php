@if ($errors->any())
    <ul class="collection" style="top:10px;">
        @foreach ($errors->all() as $error)
            <li class="collection-item">{{$error}}</li>
        @endforeach
    </ul>
@endif