<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'resume',
        'cv',
        'cert'
    ];

    public function job()
    {
        return $this->belongsTo(job::class);
    }
}
