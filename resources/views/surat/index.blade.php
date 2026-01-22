@extends('menu/navbar')

@section('content')
<div class="pc-container">
  <div class="pc-content">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Surat</h4>

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
            <tbody>
              @forelse ($surat as $s)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->kode_surat }}</td>
                <td>
                  @if($s->photo)
                  <img src="{{ asset('storage/'.$s->photo) }}"
                    style="width:60px;height:60px;object-fit:cover;border-radius:4px;">
                  @else
                  <span class="text-muted">Tidak ada foto</span>
                  @endif
                </td>
                <td>{{ $s->name_kategori }}</td>
                <td>{{ $s->name_kelompok }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ \Carbon\Carbon::parse($s->created_at)->format('d-m-Y') }}</td>
                <td>
                  <a href="{{ route('surat.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>

                  <form action="{{ route('surat.destroy', $s->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                      onclick="return confirm('Yakin hapus?')">Hapus</button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="7" class="text-center">Belum ada data</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection