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
                                 50 User
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
                                 50 User
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
                                 50 Produk
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
                                 50 Produk
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
