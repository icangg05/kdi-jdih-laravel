<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\PeraturanTerkait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BackendFormPeraturanTerkaitController extends Controller
{
  // Functon create data peraturan terkait
  public function create($idDokumen)
  {
    $title = 'Tambah Peraturan Terkait';
    $dataStatus = [
      ['label' => 'Melaksanakan', 'value' => 'Melaksanakan'],
      ['label' => 'Dilaksanakan', 'value' => 'Dilaksanakan'],
    ];
    $dataPeraturan = Document::where('tipe_dokumen', 1)->pluck('judul', 'id')
      ->map(fn($judul, $id) => ['label' => $judul, 'value' => $id]);


    return view('backend.pages.form-peraturan-terkait.form-peraturan-terkait', compact(
      'idDokumen',
      'title',
      'dataStatus',
      'dataPeraturan',
    ));
  }


  // Functon edit data peraturan terkait
  public function edit($idDokumen, $id)
  {
    $peraturanTerkait = PeraturanTerkait::findOrFail($id);

    $title = 'Edit Peraturan Terkait';
    $dataStatus = [
      ['label' => 'Melaksanakan', 'value' => 'Melaksanakan'],
      ['label' => 'Dilaksanakan', 'value' => 'Dilaksanakan'],
    ];
    $dataPeraturan = Document::where('tipe_dokumen', 1)->pluck('judul', 'id')
      ->map(fn($judul, $id) => ['label' => $judul, 'value' => $id]);


    return view('backend.pages.form-peraturan-terkait.form-peraturan-terkait', compact(
      'idDokumen',
      'title',
      'dataStatus',
      'dataPeraturan',
      'peraturanTerkait'
    ));
  }


  // Functon store data peraturan terkait
  public function store(Request $request, $idDokumen)
  {
    $request->validate([
      'status_perter'     => ['required'],
      'peraturan_terkait' => ['required'],
    ]);

    PeraturanTerkait::create([
      'id_dokumen'        => (int) $idDokumen,
      'peraturan_terkait' => $request->peraturan_terkait,
      'status_perter'     => $request->status_perter,
      'catatan_perter'    => trim(ucfirst($request->catatan_perter)),
      'created_at'        => Carbon::now(),
      'updated_at'        => Carbon::now(),
      '_created_by'       => Auth::user()->id,
      '_updated_by'       => Auth::user()->id,
    ]);


    return redirect()->route('backend.peraturan.show', $idDokumen)->with([
      'success'   => 'Data peraturan terkait berhasil ditambahkan.',
      'tabActive' => 'dataPeraturanTerkait',
    ]);
  }


  // Functon update data peraturan terkait
  public function update(Request $request, $idDokumen, $idPeraturanTerkait)
  {
    $request->validate([
      'status_perter'     => ['required'],
      'peraturan_terkait' => ['required'],
    ]);

    PeraturanTerkait::findOrFail($idPeraturanTerkait)->update([
      'id_dokumen'        => (int) $idDokumen,
      'peraturan_terkait' => (int) $request->peraturan_terkait,
      'status_perter'     => $request->status_perter,
      'catatan_perter'    => trim(ucfirst($request->catatan_perter)),
      'updated_at'        => Carbon::now(),
      '_updated_by'       => Auth::user()->id,
    ]);


    return redirect()->route('backend.peraturan.show', $idDokumen)->with([
      'success'   => 'Data peraturan terkait berhasil diupdate.',
      'tabActive' => 'dataPeraturanTerkait',
    ]);
  }


  // Functon delete data peraturan terkait
  public function destroy($idDokumen, $idPeraturanTerkait)
  {
    PeraturanTerkait::findOrFail($idPeraturanTerkait)->delete();

    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'info'      => 'Data peraturan terkait berhasil dihapus.',
      'tabActive' => 'dataPeraturanTerkait',
    ]);
  }
}
