<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function index()
    {
        $surat = DB::table('t_surat')
            ->join('users', 't_surat.id_staff', '=', 'users.id')
            ->leftJoin('t_pesan', 't_surat.name_kategori', '=', 't_pesan.jenis_pesan')
            ->leftJoin('t_kelompok', 't_surat.name_kelompok', '=', 't_kelompok.jenis_kelompok')
            ->select(
                't_surat.*',
                'users.name as name'
            )
            ->get();

        return view('surat.index', compact('surat'));
    }

    public function create()
    {
        $kategoris = DB::table('t_pesan')->get();     // ada jenis_pesan
        $kelompoks = DB::table('t_kelompok')->get();  // ada jenis_kelompok
        $staffs    = DB::table('users')->where('role', 'staff')->get();

        return view('surat.create', compact('kategoris', 'kelompoks', 'staffs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_kategori' => 'required',
            'name_kelompok' => 'required',
            'kode_surat'    => 'required',
            'pesan'         => 'required',
            'id_staff'      => 'required',
            'file'          => 'nullable|mimes:pdf,doc,docx',
            'photo'         => 'nullable|image'
        ]);

        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('surat/photo', 'public');
        }

        $file = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('surat/file', 'public');
        }

        DB::table('t_surat')->insert([
            'name_kategori' => $request->name_kategori,
            'name_kelompok' => $request->name_kelompok,
            'kode_surat'    => $request->kode_surat,
            'pesan'         => $request->pesan,
            'id_staff'      => $request->id_staff,
            'photo'         => $photo,
            'file'          => $file,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return redirect()->route('surat.index');
    }

    public function edit($id)
    {
        $surat = DB::table('t_surat')->where('id', $id)->first();

        $kategoris = DB::table('t_pesan')->get();
        $kelompoks = DB::table('t_kelompok')->get();
        $staffs    = DB::table('users')->where('role', 'staff')->get();

        return view('surat.create', compact('surat', 'kategoris', 'kelompoks', 'staffs'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name_kategori' => $request->name_kategori,
            'name_kelompok' => $request->name_kelompok,
            'kode_surat'    => $request->kode_surat,
            'pesan'         => $request->pesan,
            'id_staff'      => $request->id_staff,
            'updated_at'    => now(),
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('surat/photo', 'public');
        }

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('surat/file', 'public');
        }

        DB::table('t_surat')->where('id', $id)->update($data);

        return redirect()->route('surat.index');
    }

    public function destroy($id)
    {
        DB::table('t_surat')->where('id', $id)->delete();
        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus');
    }
}
