@extends('app')

@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)
    <article>
        <a href="{{url('/articles', $article->id)}}"><h2>{{ $article->title }}</h2></a>

        <div class="body">{{$article->body}}</div>
        <div class="body">users id: {{$article->user_id}}</div>


    </article>
    @endforeach
@stop