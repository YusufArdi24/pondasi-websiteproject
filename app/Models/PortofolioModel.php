<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'idportofolio';
    public $timestamps = true;
    protected $guarded = [];
}
