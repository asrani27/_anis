<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table = 'distribusi';
    protected $guarded = ['id'];
    public function penerima()
    {
        return $this->belongsTo(Penerima::class);
    }
    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
    public function pangan()
    {
        return $this->belongsTo(Pangan::class);
    }
}
