<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'question1', 'answer1', 'question2', 'answer2', 'question3', 'answer3'];
}
