@extends('layouts.default')
@section('content')
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            <div class="gallery">
                <div class="column">
                    @for ($i = 0; $i < (count($galleries)/2); $i++)
                        <img src="../{{ $galleries[$i]->photo }}"></img>
                    @endfor
                </div>
                <div class="column">
                    @for ($i = (count($galleries)/2); $i < (count($galleries)); $i++)
                        <img src="../{{ $galleries[$i]->photo }}"></img>
                        @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@stop
