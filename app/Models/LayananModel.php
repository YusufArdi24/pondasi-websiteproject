<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'idlayanan';
    protected $guarded = [];


    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'idkategori', 'idkategori');
    }
}
