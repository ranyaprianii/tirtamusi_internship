<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionDivision extends Model
{
    use HasFactory;

    protected $table = "section_divisions";

    protected $guarded = ['id'];
}
