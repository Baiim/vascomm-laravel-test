@extends('layouts.admin')

@section('title')
    Vascomm | Data User
@endsection
@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">User</h2>
            <p class="dashboard-subtitle">
                List of User
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <a href="{{route('user.create')}}" class="btn btn-primary">Tambah User</a>
                            </div><br>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->notelp }}</td>
                                            <td>
                                                @if($user->status == 1)
                                                    <button class="btn btn-success btn-sm btn-pill d-inline-block" style="min-width: 80px;">Aktif</button>
                                                @else
                                                    <button class="btn btn-danger btn-sm btn-pill d-inline-block" style="min-width: 80px;">Tidak Aktif</button>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <button class="btn btn-primary btn-sm rounded-circle mr-2 d-inline-block" style="min-width: 50px;">
                                                        <img src="{{ asset('img/pencil.png') }}" width="20" height="20" alt="">
                                                    </button>
                                                    <form id="deleteForm" action="{{ route('user.delete', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm rounded-circle" style="min-width: 50px;" onclick="deleteConfirmation()">
                                                            <img src="{{ asset('img/trash.png') }}" width="20" height="20" alt="">
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
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
@push('js')
<script>
    function deleteConfirmation() {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan tindakan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lakukan aksi hapus di sini
                // Untuk pengiriman formulir hapus
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>
@endpush
