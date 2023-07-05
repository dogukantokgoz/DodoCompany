<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricings extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'price_title', 'price', 'price_time', 'madde1',
                           'madde2', 'madde3', 'madde4', 'madde5'];
}
