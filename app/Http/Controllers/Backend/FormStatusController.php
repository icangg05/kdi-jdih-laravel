<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DataStatus;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormStatusController extends Controller
{
    // Function halaman create form
    public function create($idDokumen)
    {
        $title = 'Tambah Status Peraturan';
        $selectStatus = DB::table('status')->whereIn('id', [2, 4, 6, 7])->pluck('status')
            ->map(fn($status) => ['label' => ucfirst($status), 'value' => $status]);
        $selectPeraturan = Document::where('tipe_dokumen', 1)->pluck('judul', 'id')
            ->map(fn($status, $id) => ['label' => $status, 'value' => $id]);

        return view('backend.form-status', compact(
            'idDokumen',
            'title',
            'selectStatus',
            'selectPeraturan',
        ));
    }


    // Function store data hasil uji materi
    public function store(Request $request, $idDokumen)
    {
        $request->validate([
            'status_peraturan'  => ['required'],
            'id_dokumen_target' => ['required'],
            'tanggal_perubahan' => ['required'],
        ]);

        DataStatus::create([
            'id_dokumen'               => (int) $idDokumen,
            'status_peraturan'         => $request->status_peraturan,
            'id_dokumen_target'        => $request->id_dokumen_target,
            'tanggal_perubahan'        => Carbon::createFromFormat('d-F-Y', $request->tanggal_perubahan)->format('Y-m-d'),
            'catatan_status_peraturan' => trim(ucfirst($request->catatan_status_peraturan)),
            'created_at'               => Carbon::now(),
            'updated_at'               => Carbon::now(),
            '_created_by'              => Auth::user()->id,
            '_updated_by'              => Auth::user()->id,
        ]);


        return redirect()->route('backend.peraturan.show', $idDokumen)->with([
            'success'   => 'Data status berhasil ditambahkan.',
            'tabActive' => 'dataStatus',
        ]);
    }


    // Function halaman edit form
    public function edit($idDokumen, $idDataStatus)
    {
        $dataStatus = DataStatus::findOrFail($idDataStatus);

        $title = 'Edit Status Peraturan';
        $selectStatus = DB::table('status')->whereIn('id', [2, 4, 6, 7])->pluck('status')
            ->map(fn($status) => ['label' => ucfirst($status), 'value' => $status]);
        $selectPeraturan = Document::where('tipe_dokumen', 1)->pluck('judul', 'id')
            ->map(fn($status, $id) => ['label' => $status, 'value' => $id]);

        return view('backend.form-status', compact(
            'dataStatus',
            'idDokumen',
            'title',
            'selectStatus',
            'selectPeraturan',
        ));
    }


    // Function update data hasil uji materi
    public function update(Request $request, $idDokumen, $idDataStatus)
    {
        $request->validate([
            'status_peraturan'  => ['required'],
            'id_dokumen_target' => ['required'],
            'tanggal_perubahan' => ['required'],
        ]);


        $dataStatus = DataStatus::findOrFail($idDataStatus);

        $dataStatus->update([
            'status_peraturan'         => $request->status_peraturan,
            'id_dokumen_target'        => $request->id_dokumen_target,
            'tanggal_perubahan'        => Carbon::createFromFormat('d-F-Y', $request->tanggal_perubahan)->format('Y-m-d'),
            'catatan_status_peraturan' => trim(ucfirst($request->catatan_status_peraturan)),
            'updated_at'               => Carbon::now(),
            '_updated_by'              => Auth::user()->id,
        ]);


        return redirect()->route('backend.peraturan.show', $idDokumen)->with([
            'success'   => 'Data status berhasil diupdate.',
            'tabActive' => 'dataStatus',
        ]);
    }
}
