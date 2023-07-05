@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row">
    @foreach ($articles as $article)
    <div class="col-md-4">
        <a href="{{url('')}}">
    <div class="card">
        <div class="card-img-top"><img src="{{url($article->image)}}" alt="test" width="320px" height="450px"></div>
        <div class="card-body">{{ $article->title }}</div>
        <div class="card-body">{{ $article->description }}</div>
    </div>
    </a>
    </div>
    @endforeach
</div>
</div>
@endsection
