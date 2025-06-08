<?php

namespace App\Observers;

use App\Models\Document;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocumentObserver
{
  protected string $docDirectory;
  protected string $imgDirectory;

  public function __construct()
  {
    $this->imgDirectory = config('app.img_directory');
    $this->docDirectory = config('app.doc_directory');
  }

  /**
   * Handle the Document "created" event.
   */
  public function created(Document $document): void
  {
    //
  }

  /**
   * Handle the Document "updating" event.
   */
  public function updating(Document $document): void
  {
    if ($document->isDirty('abstrak'))
      Storage::delete($this->docDirectory . $document->getOriginal('abstrak'));
  }

  public function deleting(Document $document)
  {
    $lampiran = DB::table('data_lampiran')
      ->where('id_dokumen', $document->id)->get();

    // Delete abstrak file
    Storage::delete($this->docDirectory . $document->abstrak);
    Storage::delete($this->imgDirectory . $document->gambar_sampul);

    // Delete lampiran file if not empty
    if ($lampiran->isNotEmpty()) {
      foreach ($lampiran as $item) {
        Storage::delete($this->docDirectory . $item->dokumen_lampiran);
        DB::table('data_lampiran')->where('id', $item->id)->delete();
      }
    }
  }

  /** 
   * Handle the Document "deleted" event.
   */
  public function deleted(Document $document): void
  {
    // 
  }

  /**
   * Handle the Document "restored" event.
   */
  public function restored(Document $document): void
  {
    //
  }

  /**
   * Handle the Document "force deleted" event.
   */
  public function forceDeleted(Document $document): void
  {
    //
  }
}
