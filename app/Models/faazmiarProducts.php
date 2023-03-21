<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faazmiarProducts extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'name',
        'description',
        'productImage',
        'principleLogo'
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
