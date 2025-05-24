<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    protected $table = 'penerima';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function verifikator()
    {
        return $this->belongsTo(Verifikator::class);
    }
    public function hibah()
    {
        return $this->belongsTo(Hibah::class);
    }
}
