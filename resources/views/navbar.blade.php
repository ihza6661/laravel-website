<nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <div class="logo">
            <img src="/logo/halodoc-logo.webp" alt="Logo">
        </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/')?'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/about')?'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/news')?'active' : '' }}" href="/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/contact')?'active' : '' }}" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
              <li class="nav-item">
                <a class="nav-link {{ Request ::is('login')?'active':'' }}"href="login">Log in</a>
              </li>
  <!-- <div class="login-btn">
        <a href="#" class="btn-login">Login</a>
  </div> -->
</nav>