<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
  public function index()
  {
    // dd(str()->contains(Request()->path(), ['/create', '/edit']));
    $pengumuman = DB::table('pengumuman')
      ->orderBy('created_at', 'desc')
      ->paginate(15);

    return view('backend.pages.pengumuman.pengumuman', compact(
      'pengumuman'
    ));
  }


  public function create()
  {
    $title = 'Tambah Data Pengumuman';

    return view('backend.pages.pengumuman-form.pengumuman-form', compact('title'));
  }

  public function uploadFile($directory, $file, $oldFile = null)
  {
    $filename = $file->hashName();
    $file->storeAs($directory, $filename);

    if ($oldFile) {
      Storage::delete($directory . $oldFile);
    }

    return $filename;
  }

  public function store(Request $request)
  {
    $request->validate([
      'tanggal' => ['required', 'date'],
      'judul'   => ['required'],
      'tag'     => ['required'],
      'isi'     => ['required'],
      'image'   => ['nullable', 'mimes:jpg,jpeg,png', 'max:5120'],
      'dokumen' => ['nullable', 'mimes:pdf', 'max:20480'],
      'status'  => ['required'],
    ]);

    // Upload image and document
    if ($request->file('image')) {
      $image = $this->uploadFile(config('app.img_directory'), $request->file('image'));
    }
    if ($request->file('dokumen')) {
      $dokumen = $this->uploadFile(config('app.doc_directory'), $request->file('dokumen'));
    }

    $tanggal = Carbon::createFromFormat('d-F-Y', $request->tanggal)->format('Y-m-d');

    DB::table('pengumuman')->insert([
      'tanggal'    => $tanggal,
      'judul'      => trim($request->judul),
      'tag'        => trim($request->tag),
      'isi'        => trim($request->isi),
      'image'      => $image ?? '',
      'dokumen'    => $dokumen ?? '',
      'status'     => (int) $request->status,
      'created_at' => Carbon::today(),
      'created_by' => 1,
      'updated_at' => Carbon::today(),
      'updated_by' => 1,
    ]);

    return redirect()->route('backend.pengumuman.index')->with('success', 'Sukses tambah data.');
  }


  public function edit($id)
  {
    $title      = 'Edit Data Pengumuman';
    $pengumuman = DB::table('pengumuman')->where('id', (int) $id)->first();
    abort_if(!$pengumuman, 404);

    return view('backend.pages.pengumuman-form.pengumuman-form', compact(
      'title',
      'pengumuman',
    ));
  }


  public function update(Request $request, $id)
  {
    $request->validate([
      'tanggal' => ['required', 'date'],
      'judul'   => ['required'],
      'tag'     => ['required'],
      'isi'     => ['required'],
      'image'   => ['nullable', 'mimes:jpg,jpeg,png', 'max:5120'],
      'dokumen' => ['nullable', 'mimes:pdf', 'max:20480'],
      'status'  => ['required'],
    ]);

    $pengumuman     = DB::table('pengumuman')->where('id', (int) $id);
    $pengumumanData = $pengumuman->first();

    // Upload image and document
    if ($request->file('image')) {
      $image = $this->uploadFile(
        config('app.img_directory'),
        $request->file('image'),
        $pengumumanData->image
      );
    }
    if ($request->file('dokumen')) {
      $dokumen = $this->uploadFile(
        config('app.doc_directory'),
        $request->file('dokumen'),
        $pengumumanData->dokumen
      );
    }

    $tanggal = Carbon::createFromFormat('d-F-Y', $request->tanggal)->format('Y-m-d');

    $pengumuman->update([
      'tanggal'    => $tanggal,
      'judul'      => trim($request->judul),
      'tag'        => trim($request->tag),
      'isi'        => trim($request->isi),
      'image'      => $image ?? $pengumumanData->image,
      'dokumen'    => $dokumen ?? $pengumumanData->dokumen,
      'status'     => (int) $request->status,
      'updated_at' => Carbon::today(),
      'updated_by' => 1,
    ]);

    return redirect()->route('backend.pengumuman.index')->with('success', 'Data berhasil diupdate');
  }


  public function destroy($id)
  {
    DB::table('pengumuman')->where('id', (int) $id)->delete();

    return redirect()->route('backend.pengumuman.index')->with('success', 'Data berhasil dihapus');
  }
}
