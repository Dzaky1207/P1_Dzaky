@extends('menu/navbar')

@section('content')
<div class="pc-container">
  <div class="pc-content">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sumber Surat</h4>

        <div class="d-flex justify-content-end mb-3">
          <a href="{{ route('surat.create') }}" class="btn btn-primary">Tambah Surat</a>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Photo</th>
                <th>Kategori</th>
                <th>Kelompok</th>
                <th>Staff</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>

          </table>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection