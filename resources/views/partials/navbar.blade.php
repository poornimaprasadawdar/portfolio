<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">Poornima</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
             href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('project1') ? 'active' : '' }}" 
             href="{{ route('work') }}">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('project2') ? 'active' : '' }}" 
             href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>