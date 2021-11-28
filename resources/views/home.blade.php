{{-- @dd($books) --}}
@extends('layouts.main')

@section('container')
    {{-- <h1>Wildan Anjing</h1>
    <h3>{{ $name }}</h3> --}}

    {{-- @foreach ($books as $book)
        <article>
            <h2>Title: {{ $book["title"] }}</h2>
            <h5>Author: {{ $book["author"] }}</h5>
        </article>
    @endforeach --}}
    <div style="width: 60rem">
        <h2>Book List</h2>
        <hr>
        <div class="d-flex justify-content-around">
            <table class="table table-striped table-inverse table-responsive">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr >
                        <td >
                            {{ $book["title"] }}
                            <a href="/book/{{ $book["slug"] }}"><h6>Details</h6></a>
                        </td>
                        <td>{{ $book["author"] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection