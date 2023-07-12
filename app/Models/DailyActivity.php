<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyActivity extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function apprentince()
    {
        return $this->belongsTo(Apprentince::class, 'apprentince_id', 'id');
    }
}
