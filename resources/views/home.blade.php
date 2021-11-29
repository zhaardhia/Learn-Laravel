@extends('layouts.main')

@section('container')
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
                @forelse ($books as $book)
                    <tr >
                        <td >
                            {{ $book->title }}
                            <a href="/book/{{ $book->detail->id }}"><h6 style="">Details</h6></a>
                        </td>
                        <td>{{ $book->detail->author }}</td>
                        
                    </tr>
                @empty
                    <tr >
                        <td>No Data...</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection