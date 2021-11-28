
@extends('layouts.main')

@section('container')
    <div style="width: 60rem">
        <h2>Book Details</h2>
        <hr>
        <article>
            <h5>Title: {{ $book["title"] }}</h5>
            <h5>Author: {{ $book["author"] }}</h5>
            <h5>Publisher: {{ $book["publisher"] }}</h5>
            <h5>Year: {{ $book["year"] }}</h5>
            <h5>Desc: {{ $book["desc"] }}</h5>
        </article>
        <a href="/home">Back To Menu</a>
    </div>
    
@endsection