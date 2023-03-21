<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    public function faazmiarProducts()
    {
        return $this->hasMany(faazmiarProducts::class);
    }

    public function faazmiarServices()
    {
        return $this->hasMany(faazmiarServices::class);
    }

}
