<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipScore extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const PREDICATE_STATUS_A = "A";
    const PREDICATE_STATUS_B = "B";
    const PREDICATE_STATUS_C = "C";
    const PREDICATE_STATUS_D = "D";
    const PREDICATE_STATUS_E = "E";

    const DESCRIPTION_STATUS_A = "Baik Sekali";
    const DESCRIPTION_STATUS_B = "Baik";
    const DESCRIPTION_STATUS_C = "Cukup";
    const DESCRIPTION_STATUS_D = "Kurang";
    const DESCRIPTION_STATUS_E = "Kurang Sekali";

    public function apprentince()
    {
        return $this->belongsTo(Apprentince::class, 'apprentince_id', 'id');
    }
}
