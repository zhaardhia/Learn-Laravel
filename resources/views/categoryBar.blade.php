
<div>
    <h2>Category</h2>
    <hr>
    <div class="d-flex flex-column">
        @foreach ($categories as $category)
            <a class="text-decoration-none" href="/categories/{{ $category->id }}">{{ $category->category }}</a>
        @endforeach
    </div>
</div>
