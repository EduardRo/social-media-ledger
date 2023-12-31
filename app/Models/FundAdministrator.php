<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundAdministrator extends Model
{
    use HasFactory;

    public function funds()
    {
        return $this->hasMany(Fund::class);
    }
}
