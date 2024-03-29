<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentince extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_NOT_CONFIRMED = "Belum Dikonfirmasi";
    const STATUS_APPROVED = "Disetujui";
    const STATUS_REJECTED = "Ditolak";
    const STATUS_DONE = "Selesai";

    // Gender
    const GENDER_MAN = "Laki-laki";
    const GENDER_WOMAN = "Perempuan";

    const GENDER_CHOICE = [
        self::GENDER_MAN => self::GENDER_MAN,
        self::GENDER_WOMAN => self::GENDER_WOMAN,

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }
}
