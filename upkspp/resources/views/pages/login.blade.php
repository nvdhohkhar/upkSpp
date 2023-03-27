@extends('main.bootstrap')
@section('css')
    <style>
      ::placeholder{
        text-align: center;
      }

      input{
        text-align: center;
      }
    </style>
@endsection
@section('content')
    <div class="vh-100" style="....">
      <div class="container h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12-col -12">
            <div class="card text-center">
              <div class="card-body">
                <h3>Login</h3>
    @if(Session::has('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> {{ Session::get('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
                <form action="{{ url('/auth')}}" method="post">
                  @csrf
                    <input type="email" name="email" id="email" class="form-control py-2 mt-3 mb-3" placeholder="Email">
                    <input type="password" name="password" id="password" class="form-control py-2" placeholder="Password">
                    <button type="submit" class="mt-3 btn btn-primary py-2 px-5">Login</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection