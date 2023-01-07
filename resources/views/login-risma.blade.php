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

    <title>Login (heal)ang</title>
  </head>
  <body>


    @guest

    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
      <div class="contents order-2 order-md-1">
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3>Login to <strong>(heal)ang</strong></h3>
              <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input name="email" type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Kata Sandi</label>
                  <input name="password" type="password" class="form-control" placeholder="Your Password" id="password">
                </div> 
                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                <br>
                Anda belum punya akun? <a href="/preregister">Daftar</a>
  
              </form>
            </div>
          </div>
        </div>
      </div>
  
      
    </div>

    @endguest
  


  </body>
</html>