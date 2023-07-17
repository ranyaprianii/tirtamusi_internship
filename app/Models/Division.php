<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function section_divisions()
    {
        return $this->hasMany(SectionDivision::class, 'division_id', 'id');
    }

    public function section_division()
    {
        return $this->hasOne(SectionDivision::class, 'division_id', 'id');
    }
}
