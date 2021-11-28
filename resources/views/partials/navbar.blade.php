<div class="container">
    <h1 class="text-center m-5">Happy Book Store</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/home">Happy Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "") ? 'active' : '' }}" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" aria-current="page" href="/contact">Contact</a>
            </li>
            </ul>
        </div>
    </div>
  </nav>