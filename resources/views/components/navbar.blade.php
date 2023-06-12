<nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="/" class="logo m-0 float-start">KP-Bâtiment</a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li ><a href="/">Home</a></li>
            <li >
              <a href="{{ route('batiments') }}">Appartements</a>

            </li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('about') }}">About</a></li>

            @auth
            <li><a href="{{ route('admin') }}"> Dashboard ({{ auth()->user()->name  }}) </a></li>

            @endauth
          </ul>

          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
