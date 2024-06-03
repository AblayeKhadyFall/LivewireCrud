<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-log-0">
          <li class="nav-item">
            <a witre:navigate class="nav-link active" aria-current="page" href="/customers">Customers</a>
          </li>
          @guest
          <li class="nav-item">
            <a wire:navigate class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a wire navigate class="nav-link" href="/register">Register</a>
          </li>
          @endguest
       @auth
       <li class="nav-item">
        <a wire:navigate class="nav-link" href="/customers">Custmers</a>
      </li>
      <li class="nav-item">
        <button class="btn btn-secondary btn-sm" wire:click="logout">Logout</button>
      </li>
       @endauth
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </div>
  </nav>