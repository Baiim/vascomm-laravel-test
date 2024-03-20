@extends('layouts.main')
@section('content')
<div class="container mt-5">
  <h2 class="text-left mb-4">Terbaru</h2>
  <!-- Product Cards - Scrollable -->
  <div class="container">
    <div class="row">
        @foreach($product as $product)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('img/' . $product->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Add more product cards as needed -->
</div>
  
</div>
<div class="container mt-5">
    <h2 class="text-left mb-4">Produk Tersedia</h2>
    <!-- Product Cards - Scrollable -->
    <div class="container">
      <div class="row">
        @foreach($product_active as $product)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('img/' . $product->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Add more product cards as needed -->
      </div>
    </div>
    
  </div>
@endsection