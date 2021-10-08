@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $postt["title"] }}</h2>
        <h5>{{ $postt["author"] }}</h5>
        <p>{{ $postt["body"] }}</p>
    </article>
    
    <a href="/blog">Back to Post</a>
@endsection