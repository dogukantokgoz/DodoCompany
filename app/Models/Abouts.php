<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'content1', 'content2', 'content3', 'step', 'step1','step2','step3',
        'step4', 'step5',];
}
