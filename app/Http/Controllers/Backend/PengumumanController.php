<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
  protected string $docDirectory;
  protected string $imgDirectory;

  public function __construct()
  {
    $this->imgDirectory = config('app.img_directory');
    $this->docDirectory = config('app.doc_directory');
  }

  public function index()
  {
    $pengumuman = DB::table('pengumuman')
      ->orderBy('created_at', 'desc')
      ->paginate(15);

    return view('backend.pages.pengumuman.pengumuman', compact(
      'pengumuman'
    ));
  }

  public function show($id)
  {
    $pengumuman = DB::table('pengumuman')
      ->join('user as creator', 'pengumuman.created_by', '=', 'creator.id')
      ->join('user as updater', 'pengumuman.updated_by', '=', 'updater.id')
      ->where('pengumuman.id', (int) $id)
      ->select('pengumuman.*', 'creator.username as created_by', 'updater.username as updated_by')
      ->first();

    return view('backend.pages.pengumuman-view.pengumuman-view', compact(
      'pengumuman'
    ));
  }


  public function create()
  {
    $title = 'Tambah Data Pengumuman';

    return view('backend.pages.pengumuman-form.pengumuman-form', compact('title'));
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

    $tanggal = Carbon::createFromFormat('d-F-Y', $request->tanggal)->format('Y-m-d');

    // Upload image and document
    if ($request->file('image'))
      $image = uploadFile($this->imgDirectory, $request->file('image'));

    if ($request->file('dokumen'))
      $dokumen = uploadFile($this->docDirectory, $request->file('dokumen'));

    Pengumuman::create([
      'tanggal'    => $tanggal,
      'judul'      => trim($request->judul),
      'tag'        => trim($request->tag),
      'isi'        => trim($request->isi),
      'image'      => $image ?? '',
      'dokumen'    => $dokumen ?? '',
      'status'     => (int) $request->status,
      'created_at' => Carbon::now(),
      'created_by' => Auth::user()->id,
      'updated_at' => Carbon::now(),
      'updated_by' => Auth::user()->id,
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

    $tanggal    = Carbon::createFromFormat('d-F-Y', $request->tanggal)->format('Y-m-d');
    $pengumuman = Pengumuman::findOrFail((int) $id);

    // Upload image and document
    if ($request->file('image'))
      $image = uploadFile($this->imgDirectory, $request->file('image'));

    if ($request->file('dokumen'))
      $dokumen = uploadFile($this->docDirectory, $request->file('dokumen'));

    $pengumuman->update([
      'tanggal'    => $tanggal,
      'judul'      => trim($request->judul),
      'tag'        => trim($request->tag),
      'isi'        => trim($request->isi),
      'image'      => $image ?? $pengumuman->image,
      'dokumen'    => $dokumen ?? $pengumuman->dokumen,
      'status'     => (int) $request->status,
      'updated_at' => Carbon::now(),
      'updated_by' => Auth::user()->id,
    ]);

    return redirect()->route('backend.pengumuman.index')->with('success', 'Data berhasil diupdate');
  }


  public function destroy($id)
  {
    Pengumuman::findOrFail((int) $id)->delete();

    return redirect()->route('backend.pengumuman.index')->with('success', 'Data berhasil dihapus');
  }
}
