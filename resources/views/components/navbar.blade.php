<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>

          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Category</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">About Us</a>
        </li>
          @else
          @if (Auth::user()->role=='admin')
          <li class="nav-item">
            <a class="nav-link" href="{{url('/deleteUser')}}">User</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{url('/profile')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/blog')}}">Blog</a>
          </li>
          @endif
          @endguest

          <ul class="navbar-nav ml-auto">

            @if(Auth::check() == NULL)
                <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item mr-5">
                <a class="nav-link" href="/register">Register</a>
                </li>
            @else
            <li class="nav-item dropdown mr-5">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            </li>
            @endif
          </ul>
        </ul>
      </div>
    </div>
  </nav>
