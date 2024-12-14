<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = [
        'title', 'salary',
    ];

    public function employer(){
        return $this->belongsTo('App\Models\Employer');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag', foreignPivotKey: 'job_listing_id');
    }
    
}