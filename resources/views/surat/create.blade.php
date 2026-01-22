@extends('menu/navbar')

@section('content')
<div class="pc-container">
    <div class="pc-content">
        <div class="card">
            <div class="card-body">

                <h5 class="mb-4">
                    {{ isset($surat) ? 'Edit Surat' : 'Tambah Surat' }}
                </h5>

                @if(isset($surat))
                <form action="{{ route('surat.update', $surat->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @else
                    <form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
                        @endif
                        @csrf

                        {{-- KATEGORI --}}
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="name_kategori" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($kategoris as $k)
                                <option value="{{ $k->jenis_pesan }}"
                                    {{ (isset($surat) && $surat->name_kategori == $k->jenis_pesan) ? 'selected' : '' }}>
                                    {{ $k->jenis_pesan }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- KELOMPOK --}}
                        <div class="mb-3">
                            <label class="form-label">Kelompok</label>
                            <select name="name_kelompok" class="form-control" required>
                                <option value="">-- Pilih Kelompok --</option>
                                @foreach($kelompoks as $klp)
                                <option value="{{ $klp->jenis_kelompok }}"
                                    {{ (isset($surat) && $surat->name_kelompok == $klp->jenis_kelompok) ? 'selected' : '' }}>
                                    {{ $klp->jenis_kelompok }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- KODE SURAT --}}
                        <div class="mb-3">
                            <label class="form-label">Kode Surat</label>
                            <input type="number" name="kode_surat" class="form-control"
                                value="{{ $surat->kode_surat ?? '' }}" required>
                        </div>

                        {{-- PESAN --}}
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control" required>{{ $surat->pesan ?? '' }}</textarea>

                        </div>

                        {{-- STAFF --}}
                        <div class="mb-3">
                            <label class="form-label">Staff</label>
                            <select name="id_staff" class="form-control" required>
                                <option value="">-- Pilih Staff --</option>
                                @foreach($staffs as $st)
                                <option value="{{ $st->id }}"
                                    {{ (isset($surat) && $surat->id_staff == $st->id) ? 'selected' : '' }}>
                                    {{ $st->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- PHOTO --}}
                        <div class="mb-3">
                            <label class="form-label">Photo Surat</label>
                            <input type="file" name="photo" class="form-control">
                            @if(isset($surat) && $surat->photo)
                            <img src="{{ asset('storage/'.$surat->photo) }}"
                                class="mt-2 rounded"
                                style="width:120px;height:120px;object-fit:cover">
                            @endif
                        </div>

                        {{-- FILE --}}
                        <div class="mb-3">
                            <label class="form-label">File Surat</label>
                            <input type="file" name="file" class="form-control" accept=".pdf,.doc,.docx">
                            @if(isset($surat) && $surat->file)
                            <a href="{{ asset('storage/'.$surat->file) }}" target="_blank">Lihat File</a>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('surat.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

            </div>
        </div>
    </div>
</div>
@endsection