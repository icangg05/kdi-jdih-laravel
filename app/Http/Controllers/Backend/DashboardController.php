<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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

    return view('backend.dashboard', compact(
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
    // $mysqldump = "mysqldump";

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


  public function downloadFile(Request $request)
  {
    return Storage::download($request->filePath);
  }


  public function generateWilayah()
  {
    $response = Http::timeout(5)->get('https://wilayah.id/api/provinces.json');

    if (!$response->successful()) {
      return response()->json([
        'success' => false,
        'message' => 'Gagal mengambil data provinsi'
      ], 500);
    }

    $result = $response->json()['data'] ?? [];

    $provinsiList = collect($result)
      ->map(fn($item) => [
        'code' => $item['code'],
        'label' => strtoupper($item['name']),
        'value' => strtoupper($item['name'])
      ])
      ->values()
      ->toArray();

    $gabunganWilayah = $provinsiList;

    // Ambil kabupaten/kota berdasarkan kode provinsi
    foreach ($provinsiList as $prov) {
      $code = $prov['code'];
      $kabResponse = Http::timeout(5)->get("https://wilayah.id/api/regencies/{$code}.json");

      if ($kabResponse->successful()) {
        $kabupatenList = $kabResponse->json()['data'] ?? [];

        $formattedKabupaten = collect($kabupatenList)
          ->map(fn($item) => [
            'label' => strtoupper($item['name']),
            'value' => strtoupper($item['name'])
          ])
          ->values()
          ->toArray();

        $gabunganWilayah = array_merge($gabunganWilayah, $formattedKabupaten);
      }
    }

    Storage::put('data_wilayah.json', json_encode($gabunganWilayah, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    return response()->json([
      'success' => true,
      'message' => 'Data provinsi dan kabupaten berhasil disimpan',
      'total_data' => count($gabunganWilayah)
    ]);
  }
}
