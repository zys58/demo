@extends('layouts.app')
@section('title','博客')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($notifications as $notification)
                {{ $notification }}
            @endforeach
        </div>
    </div>
@endsection
