<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipFile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_CONFIRMED = "Sudah Dikonfirmasi";
    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";

    public function apprentince()
    {
        return $this->belongsTo(Apprentince::class, 'apprentince_id', 'id');
    }
}
