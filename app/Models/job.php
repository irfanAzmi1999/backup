<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobName',
        'jobDescription',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function responsibilities()
    {
        return $this->hasMany(responsibility::class);
    }

    public function job_applicants()
    {
        return $this->hasMany(job_applicant::class);
    }



}
