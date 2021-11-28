
@extends('layouts.main')

@section('container')
    <div style="width: 60rem">
        <h2>Book Details</h2>
        <hr>
        <article>
            <p>Title: {{ $book["title"] }}</p>
            <p>Author: {{ $book["author"] }}</p>
            <p>Publisher: {{ $book["publisher"] }}</p>
            <p>Year: {{ $book["year"] }}</p>
            <p>Desc: {{ $book["desc"] }}</p>
        </article>
        <a href="/home">Back To Menu</a>
    </div>
    
@endsection