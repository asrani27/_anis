<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verifikator extends Model
{
    protected $table = 'verifikator';
    protected $guarded = ['id'];

    public function skpd()
    {
        return $this->belongsTo(Skpd::class, 'skpd_id');
    }
}
