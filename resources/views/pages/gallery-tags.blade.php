@extends('layouts.default')
@section('content')
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            @foreach ($tags as $tag)
                <a href="../gallery/{{ $tag }}">{{ $tag }}</a>
            @endforeach
            <div class="gallery">
                @foreach ($galleries as $photo)
                    <img src="{{
                    asset($photo->photo) }}"></img>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
