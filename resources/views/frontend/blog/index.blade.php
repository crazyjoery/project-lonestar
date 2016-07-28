@extends('frontend.layouts.master')

@section('title')
Blog - {{app_name()}}
@endsection
@section('content')

    <article>
        <h3>Post Title</h3>
        <span class=h2>Post Author | Creation Date</span>
        <p>Post Body</p>
        <a href="#">Read more</a>
    </article>

@endsection