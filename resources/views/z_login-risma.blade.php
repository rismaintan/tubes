@extends('header')
@section('content')

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

@guest

    <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col">     
                    <img src="/img/mobil.png" style="">  
                </div>
            <div class="col">
            <form action="{{ route('login') }}" method="POST" class="p-5 vh-150" style="margin-right: 100px;" enctype="multipart/form-data">
                <input type="hidden" name="id_mobil" >
                @csrf
                <h1>Login</h1><br>
                    <div class="mb-3 ">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" value="" required>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" value="rememberme" id="remember" type="checkbox" >
                        <label class="form-check-label" for="rememberme">
                            Remember Me 
                        </label>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <br>
                Anda belum punya akun? <a href="/preregister">Daftar</a>
            </form>
            </div>
        </div>
    </div>
@endguest
@auth
    <div class="container p-5 ">
        <div class="row align-items-center">
            <div class="col p-3">
                <h1>Selamat Datang di Show Room RISMA</h1> <br>
                <p>Mobil adalah kendaraan roda empat yang digerakkan dengan tenaga mesin dengan bahan bakar bensin atau solar yang mempunyai bentuk tertentu.</p>
                    <div class="form-group mt-3 p-3 ">     
                        @auth
                        <a href="/car" class="btn btn-primary">MyCar</a>   
                        @endauth   
                        
                        @guest        
                        @endguest
                    </div>
                <div class="d-flex justify-content-start p-3">
                    <div class="row mt-3">
                        <div class="col">
                            <img src="/img/logo-ead.png" class="card-img-top" style="width:50%;">
                        </div> 
                        <div class="col">
                            RISMA INTAN WULANDARI_1202204094
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-6">     
                <img src="/img/mobil.png" class="card-img-top">  
            </div>
        </div>
    </div>
@endauth
@endsection