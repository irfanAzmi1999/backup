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

    public function users()
    {
        return $this->belongsToMany(User::class,'users_services_products','services_id','users_id');
    }

    public function technical_papers()
    {
        return $this->hasMany(technical_paper::class);
    }

}
