<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Date;
use App\Models\Developer;
use App\Models\User;

class Office extends Model
{
    use HasFactory;

    public function dates()
    {
        return $this->hasMany(Date::class);
    }

    public function developers()
    {
        return $this->hasMany(Developer::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
