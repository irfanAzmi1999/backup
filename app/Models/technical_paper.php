<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technical_paper extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(product::class,'product_id');
    }

    public function service()
    {
        return $this->belongsTo(service::class,'service_id');
    }

}
