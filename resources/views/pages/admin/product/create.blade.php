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
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="price" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Upload Foto Product</label>
                                    <input type="file" class="form-control-file" id="foto_produk" name="image" onchange="previewImage()" required>
                                    <img id="preview" class="mt-2" style="display: none; max-width: 200px;" />
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
<script>
    function previewImage() {
        var preview = document.getElementById('preview');
        var file = document.getElementById('foto_produk').files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = "block";
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>
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
    

