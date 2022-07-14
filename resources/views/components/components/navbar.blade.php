<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">DMART</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            @guest
            <li class="nav-item">
              <a class="nav- btn btn-primary " href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @else
          <li class="nav-item">
            <a class="btn btn-danger mx-4" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
          </li>
          <li class="nav-item">
            <a href="/cart" class="btn btn-info">My Cart</a>
          </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>