<nav class="navbar navbar-expand-lg bg-info-subtle">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cero Store</a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active {{ Request ::is('/')?'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active {{ Request ::is('/')?'active':'' }}" href="/kontak">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active {{ Request ::is('/')?'active':'' }}" href="/topup">Top Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active {{ Request ::is('/')?'active':'' }}" href="/tentang_kami">Tentang Kami</a>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi
                    bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bibi-box-arrow-right"></i>Log out</button>
                        </form>
                    </li>
                </ul>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link {{ Request ::is('login')?'active':'' }}"href="login">Log in</a>
              </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>





