<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Office;
use App\Models\Date;

class Developer extends Model
{
    use HasFactory;

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
