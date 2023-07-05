@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr><a href="{{url('/createArticle')}}"><button type="button" class="btn btn-dark">+ Create Blog</button></a></tr>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">1</th>
                <td>{{$article->title}}</td>
                <td>
                    <form action="{{url('/blog')}}" method='post'>
                        @csrf
                        <input type="hidden" name="article" value="{{$article->id}}">
                        <button type="submit" class="btn btn-dark">Delete</button></td>
                    </form>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
