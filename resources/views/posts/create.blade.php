@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>
        <hr>
        <form method="POST" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="" cols="10" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Publish</button>
            </div>
            <div class="form-group">
                @include ('layouts.error')
            </div>
        </form>
    </div>
@endsection