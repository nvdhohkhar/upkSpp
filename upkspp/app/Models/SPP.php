<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPP extends Model
{
    use HasFactory;

    protected $table = 'SPP';

    protected $fillable = [
        'tahun',
        'nominal',
    ];

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
