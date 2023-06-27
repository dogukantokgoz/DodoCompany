<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','data_title', 'data_content', 'data_icon', 'call_title', 'call_content',
        'features_title', 'features_content', 'features_icon', 'foto', 'counts_title', 'counts_content'];
}
