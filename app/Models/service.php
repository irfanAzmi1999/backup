<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class,'category_id');
    }

    public function benefits()
    {
        return $this->hasMany(benefit::class);
    }
}
