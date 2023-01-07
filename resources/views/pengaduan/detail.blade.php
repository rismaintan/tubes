@extends('layouts.header')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          <p></p>
          <h1>Detail Pengaduan {{ $pengaduan->namaBarang }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<img src="/image/{{ $pengaduan->image }}" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">{{ $pengaduan->namaBarang }}</span></h3>
                    <h4>{{ Auth::user()->name }}</h4>
                    <div class="fs-6">Lokasi terakhir : {{ $pengaduan->lokasiTerakhir }}</div>
                    <div class="text">Deskripsi : {{ $pengaduan->deskripsi }}</div>
                    <!--Countdown Timer-->
                    
                	<a href="https://wa.me/{{$pengaduan->kontak}}" class="cart-btn mt-3"><i class="fa fa-phone"></i> Hubungi</a>
                    <a href="{{ route('pengaduan.edit', $pengaduan->id) }}" class="cart-btn btn-outline mt-3"><i class="fa fa-edit"></i>Edit</a>
                    <a href="{{ route('pengaduan.edit', $pengaduan->id) }}" class="cart-btn btn-outline mt-3"><i class="fa fa-trash"></i>Delete</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->