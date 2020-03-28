@extends('layouts.default')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1 class="mb-2 text-center">Contact Us</h1>

        @if(session('message'))
        <div class='alert alert-success'>
            {{ session('message') }}
        </div>
        @endif

        <div class="col-12 col-md-6">
            <form class="form-horizontal" method="POST" action="contact">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">Name: </label><br>
                    <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required><br>
                </div>

                <div class="form-group">
                    <label for="email">Email: </label><br>
                    <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required><br>
                </div>

                <div class="form-group">
                    <label for="message">Message: </label><br>
                    <textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea><br>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit" value="Send">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
