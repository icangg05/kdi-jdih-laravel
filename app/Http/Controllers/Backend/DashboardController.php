<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
  public function index()
  {
    $countPeraturan = DB::table('document')
      ->where('tipe_dokumen', 1)
      ->count();
    $countMonografi = DB::table('document')
      ->where('tipe_dokumen', 2)
      ->count();
    $countArtikel = DB::table('document')
      ->where('tipe_dokumen', 3)
      ->count();
    $countPutusan = DB::table('document')
      ->where('tipe_dokumen', 4)
      ->count();

    return view('backend.pages.dashboard.dashboard', compact(
      'countPeraturan',
      'countMonografi',
      'countArtikel',
      'countPutusan',
    ));
  }

  public function exportDatabase()
  {
    $dbName   = env('DB_DATABASE');
    $user     = env('DB_USERNAME');
    $pass     = env('DB_PASSWORD');
    $host     = env('DB_HOST');
    $filename = 'backup_' . $dbName . '_' . now()->format('Y-m-d_H-i-s') . '.sql';
    $filePath = storage_path("app/public/$filename");

    // Path lengkap ke mysqldump Laragon
    $mysqldump = 'C:\\laragon\\bin\\mysql\\mysql-8.0.30-winx64\\bin\\mysqldump.exe';

    // Perintah (tanpa -p jika password kosong)
    $passPart = $pass ? "-p$pass" : '';
    $command  = "\"$mysqldump\" -h $host -u $user $passPart $dbName > \"$filePath\"";

    // Eksekusi command
    exec($command . ' 2>&1', $output, $result);

    // Cek jika gagal
    if (!file_exists($filePath) || filesize($filePath) < 5000) {
      return response()->json([
        'status' => 'error',
        'message' => 'Dump gagal atau hanya ekspor struktur.',
        'command' => $command,
        'output' => $output,
        'exit_code' => $result,
        'filesize' => filesize($filePath)
      ], 500);
    }

    return response()->download($filePath)->deleteFileAfterSend(true);
  }
}
