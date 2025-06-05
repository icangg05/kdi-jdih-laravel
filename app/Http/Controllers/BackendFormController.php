<?php

namespace App\Http\Controllers;

use App\Models\DataPengarang;
use App\Models\DataSubjek;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackendFormController extends Controller
{
  // Function create TEU
  public function createTEU($idDokumen)
  {
    $title          = 'Tambah Data Tajuk Entri Utama';
    $pengarang      = DB::table('pengarang')->get()->map(fn($item) => ['label' => $item->name, 'value' => $item->id]);
    $tipePengarang  = DB::table('tipe_pengarang')->get()->map(fn($item) => ['label' => $item->name, 'value' => $item->id]);
    $jenisPengarang = DB::table('jenis_pengarang')->get()->map(fn($item) => ['label' => $item->name, 'value' => $item->id]);

    return view('backend.pages.form-teu.form-teu', compact(
      'idDokumen',
      'title',
      'pengarang',
      'tipePengarang',
      'jenisPengarang',
    ));
  }


  // Functin store data TEU
  public function storeTEU(Request $request, $idDokumen)
  {
    $request->validate([
      'nama_pengarang'  => ['required'],
      'tipe_pengarang'  => ['required'],
      'jenis_pengarang' => ['required'],
    ]);

    DataPengarang::create([
      'id_dokumen'      => (int) $idDokumen,
      'nama_pengarang'  => (int) $request->nama_pengarang,
      'tipe_pengarang'  => (int) $request->tipe_pengarang,
      'jenis_pengarang' => (int) $request->jenis_pengarang,
      'created_at'      => Carbon::now(),
      '_created_by'     => Auth::user()->id,
      'updated_at'      => Carbon::now(),
      '_updated_by'     => Auth::user()->id,
    ]);


    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'success'   => 'Data TEU berhasil ditambahkan.',
      'tabActive' => 'dataTeu',
    ]);
  }


  // Functino delete data TEU
  public function destroyTEU($idDokumen, $idDataPengarang)
  {
    DataPengarang::findOrFail($idDataPengarang)->delete();

    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'info'      => 'Data TEU berhasil dihapus.',
      'tabActive' => 'dataTeu',
    ]);
  }


  // Function create subjek
  public function createSubjek($idDokumen)
  {
    $title         = 'Tambah Data Subjek';
    $tipeKataKunci = DB::table('tipe_kata_kunci')->get()->map(fn($item) => ['label' => $item->name, 'value' => $item->name]);
    $jenisSubjek   = [
      ['label' => 'Primary', 'value' => 'Primary'],
      ['label' => 'Additional', 'value' => 'Additional']
    ];

    return view('backend.pages.form-subjek.form-subjek', compact(
      'idDokumen',
      'title',
      'tipeKataKunci',
      'jenisSubjek'
    ));
  }


    // Function create subjek
  public function editSubjek($idDokumen, $idSubjek)
  {
    $title         = 'Edit Data Subjek';
    $tipeKataKunci = DB::table('tipe_kata_kunci')->get()->map(fn($item) => ['label' => $item->name, 'value' => $item->name]);
    $jenisSubjek   = [
      ['label' => 'Primary', 'value' => 'Primary'],
      ['label' => 'Additional', 'value' => 'Additional']
    ];
    $subjek = DataSubjek::findOrFail($idSubjek);

    return view('backend.pages.form-subjek.form-subjek', compact(
      'idDokumen',
      'title',
      'tipeKataKunci',
      'jenisSubjek',
      'subjek',
    ));
  }


  // Functin store data TEU
  public function storeSubjek(Request $request, $idDokumen)
  {
    $request->validate([
      'subyek'       => ['required'],
      'tipe_subyek'  => ['required'],
      'jenis_subyek' => ['required'],
    ]);

    DataSubjek::create([
      'id_dokumen'   => (int) $idDokumen,
      'subyek'       => $request->subyek,
      'tipe_subyek'  => $request->tipe_subyek,
      'jenis_subyek' => $request->jenis_subyek,
      'created_at'   => Carbon::now(),
      '_created_by'  => Auth::user()->id,
      'updated_at'   => Carbon::now(),
      '_updated_by'  => Auth::user()->id,
    ]);


    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'success'   => 'Data subjek berhasil ditambahkan.',
      'tabActive' => 'dataSubjek',
    ]);
  }


    // Functin store data TEU
  public function updateSubjek(Request $request, $idDokumen, $idSubjek)
  {
    $request->validate([
      'subyek'       => ['required'],
      'tipe_subyek'  => ['required'],
      'jenis_subyek' => ['required'],
    ]);

    $subjek = DataSubjek::findOrFail($idSubjek);
    
    $subjek->update([
      'subyek'       => $request->subyek,
      'tipe_subyek'  => $request->tipe_subyek,
      'jenis_subyek' => $request->jenis_subyek,
      'updated_at'   => Carbon::now(),
      '_updated_by'  => Auth::user()->id,
    ]);


    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'success'   => 'Data subjek berhasil diupdate.',
      'tabActive' => 'dataSubjek',
    ]);
  }


  // Functino delete data TEU
  public function destroySubjek($idDokumen, $idSubjek)
  {
    DataSubjek::findOrFail($idSubjek)->delete();

    return redirect()->route("backend.peraturan.show", $idDokumen)->with([
      'info'      => 'Data subjek berhasil dihapus.',
      'tabActive' => 'dataSubjek',
    ]);
  }
}
