
<div>
    <h2>Category</h2>
    <hr>
    <div class="d-flex flex-column">
        @foreach ($categories as $category)
            <a href="/categories/{{ $category->id }}">{{ $category->category }}</a>
        @endforeach
    </div>
</div>
