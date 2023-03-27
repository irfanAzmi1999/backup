<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class benefit extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(product::class,'foreign_key','product_id');
    }
}
