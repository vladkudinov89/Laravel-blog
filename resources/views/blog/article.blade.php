@extends('layouts.app')

@section('title' , $article->title)
@section('meta_keyword' , $article->meta_keywords)
@section('meta_description' , $article->meta_description)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$article->title}}</h1>
                <p>{!! $article->description !!}</p>
            </div>
        </div>
    </div>
@endsection