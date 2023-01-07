<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <script src="{{ url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>

    <title>Register (heal)ang</title>
  </head>
  <body>

  @guest
    @if($errors->any())
    @foreach($errors->all() as $err)
    <div class="toast show align-items-center text-white bg-danger border-0 w-100" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ $err }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endforeach
    @endif

    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
      <div class="contents order-2 order-md-1">
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Login to <strong>(HEAL)ang</strong></h3>
              <p class="mb-4">Website lost and found </p>
              <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data  ">
                @csrf
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input name="email" type="text" class="form-control" placeholder="your-email@gmail.com" required>
                </div>
                <div class="form-group first">
                  <label for="username">Nama Lengkap</label>
                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Sandi</label>
                  <input name="password" type="password" class="form-control" placeholder="Your Password" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Konfirmasi Kata Sandi</label>
                  <input name="repassword" type="password" class="form-control" placeholder="Your Password" required>
                </div>  
                <input name="submit" type="submit" value="Daftar" class="btn btn-block btn-primary">
                <br>Anda sudah punya akun? <a href="/prelogin">Login</a>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      
    </div>

  @endguest
  


  </body>
</html>