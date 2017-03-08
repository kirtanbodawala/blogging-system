@extends('layouts.master')

@section('content')

    <h1>{{ $task->body }}</h1>

    <a href="/tasks">Click to go back</a>

@endsection