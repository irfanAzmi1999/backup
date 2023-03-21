<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faazmiarServices extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'description',
        'serviceImage',
        'principleLogo'
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
