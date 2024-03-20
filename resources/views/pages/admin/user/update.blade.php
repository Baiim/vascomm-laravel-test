@extends('layouts.admin')

@section('title')
    Vascomm | Tambah Data Product
@endsection
@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Product</h2>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_produk">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_produk" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="harga" name="notelp" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Email</label>
                                    <label for="harga">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="email" name="price" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@if (session('success'))
<script>
    Swal.fire({
        title: 'Sukses!',
        text: '{{ session('success') }}',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif
@endpush
    

