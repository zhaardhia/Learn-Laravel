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
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr >
                        {{-- {{ ($book != NULL) ?  }} --}}
                            
                            <td >
                                {{ $book->title }}
                                <a href="/book/{{ $book->detail->id }}"><h6>Details</h6></a>
                            </td>
                            <td>{{ $book->detail->author }}</td>
                            <td>{{ $book->category->category }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
@endsection