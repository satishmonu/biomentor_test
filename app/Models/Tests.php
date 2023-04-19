<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'subject',
        'topic',
        'questions',
        'pdf_link',
        
    ];
}
