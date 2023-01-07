@extends('header')
@section('content')
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

    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col">     
                    <img src="/img/mobil.png" style="">  
                </div>
                <div class="col">
                <form action="{{ route('register') }}" class="p-5 vh-100" method="POST" enctype="multipart/form-data  ">
                    @csrf
                    <h1>Register</h1><br>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" name="repassword" class="form-control" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    <br>
                    Anda sudah punya akun? <a href="/prelogin">Login</a>
                </form>
            </div>
            </div>                
        </div>
    </div>

@endguest
@endsection