<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HasilUjiMateri extends Model
{
    protected $table   = 'hasil_uji_materi';
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::updated(function ($model) {
            if ($model->isDirty('hasil_uji_materi'))
                Storage::delete(config('app.doc_directory') . $model->getOriginal('hasil_uji_materi'));
        });

        static::deleted(function ($model) {
            Storage::delete(config('app.doc_directory') . $model->hasil_uji_materi);
        });
    }
}
