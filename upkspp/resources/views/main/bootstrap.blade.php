<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP SEKOLAH</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
  @if(Request::segment(1) == 'login' || Request::segment(1) == 'loguot')
      
  @else
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">SPP Sekolah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == '/' ? 'active' : ''}}" aria-current="page" href="{{ url('/')}}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}" href="{{ url('/user')}}">User</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'siswa' ? 'active' : '' }}" href="{{ url('/siswa')}}">Siswa</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'kelas' ? 'active' : '' }}" href="{{ url('/kelas')}}">Kelas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'spp' ? 'active' : '' }}" href="{{ url('/spp')}}">SPP</a> 
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'pembayaran' ? 'active' : '' }}" href="{{ url('/pembayaran')}}">Pembayaran</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('logout')}}">Loguot</a></li>
          </ul>
        </li>


      
      
      </div>
    </div>
  </div>
</nav>
@endif
@yield('content')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" rel="stylesheet"></script>
  </body>
</html>