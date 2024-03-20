@extends('layouts.main')
@section('content')
<div class="container mt-5">
  <h2 class="text-left mb-4">Terbaru</h2>
  <!-- Product Cards - Scrollable -->
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{asset('img/parfum1.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Product Name</h5>
            <p class="card-text">$99.99</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Product Name</h5>
            <p class="card-text">$99.99</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Product Name</h5>
            <p class="card-text">$99.99</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Product Name</h5>
            <p class="card-text">$99.99</p>
          </div>
        </div>
      </div>
    </div>
      <!-- Add more product cards as needed -->
    </div>
  </div>
  
</div>
<div class="container mt-5">
    <h2 class="text-left mb-4">Produk Tersedia</h2>
    <!-- Product Cards - Scrollable -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="{{asset('img/parfum1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">$99.99</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">$99.99</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">$99.99</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <img src="{{asset('img/parfum2.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name</h5>
              <p class="card-text">$99.99</p>
            </div>
          </div>
        </div>
      </div>
        <!-- Add more product cards as needed -->
      </div>
    </div>
    
  </div>
@endsection