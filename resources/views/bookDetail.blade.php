{{-- @dd($book) --}}
@extends('layouts.main')

@section('container')
    <div style="width: 60rem">
        <h2>Book Details</h2>
        <hr>
        <article>
            
            <p>Author: {{ $detail->author }}</p>
            <p>Title: {{ $title }}</p>
            <p>Author: {{ $detail->author }}</p>
            <p>Publisher: {{ $detail->publisher }}</p>
            <p>Year: {{ $detail->year }}</p>
            <p>Desc: {{ $detail->description }}</p>
        </article>
        <a href="/home">Back To Menu</a>
    </div>
    
@endsection