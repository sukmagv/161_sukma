<nav class="navbar fixed-top navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <a href="#" class="brand-link">
        <img src={{asset("assets/dist/img/logo.png")}} alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><br></span>
      </a>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#" class="nav-link">
          Home
        </a>
      </li>
      <li class="nav-item">
          <a href="#about" class="nav-link">
            About
          </a>
      </li>

      @if (Auth::check())
      <form method="POST">
      @csrf
      <li class="nav-item">
        <a href="{{url('/logout')}}" class="nav-link">Logout</a>
      </li>
      </form>
      @else
      <form method="POST">
      @csrf
      <li class="nav-item">
        <a href="{{url('/login')}}" class="nav-link">Login</a>
      </li>
      </form>
      @endif
    </ul>
</nav>