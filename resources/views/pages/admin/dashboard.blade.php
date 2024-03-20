@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">
                Administrator Panel
            </p>
        </div>
          <div class="row">
                <div class="col-md-3">
                    <div class="card mb-2" style="background: url('img/bg-card.png') center/cover, #C2D6FF;">                        <div class="card-body">
                            <div class="dashboard-card-title" style="color: #597393">
                                Jumlah User
                            </div>
                            <div class="dashboard-card-subtitle " style="font-size: 20px">
                                 {{$users}} User
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2" style="background: url('img/bg-card.png') center/cover, #C2D6FF;">                        <div class="card-body">
                            <div class="dashboard-card-title" style="color: #597393">
                                Jumlah User Aktif
                            </div>
                            <div class="dashboard-card-subtitle " style="font-size: 20px">
                                 {{$user_count_active}} User
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2" style="background: url('img/bg-card.png') center/cover, #C2D6FF;">                        <div class="card-body">
                            <div class="dashboard-card-title" style="color: #597393">
                                Jumlah Produk
                            </div>
                            <div class="dashboard-card-subtitle " style="font-size: 20px">
                                 {{$products}} Produk
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-2" style="background: url('img/bg-card.png') center/cover, #C2D6FF;">                        <div class="card-body">
                            <div class="dashboard-card-title" style="color: #597393">
                                Jumlah Produk Aktif
                            </div>
                            <div class="dashboard-card-subtitle " style="font-size: 20px">
                                 {{$product_count_active}} Produk
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard-heading">
                                <h2 class="dashboard-title">Produk Terbaru</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead style="background-color: #C2D6FF">
                                    <tr>
                                        <th>No.</th>
                                        <th>Produk</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Harga</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->created_at->format('d M Y') }}</td>
                                            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
