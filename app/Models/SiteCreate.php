<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCreate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'itemsRotulo',
        'itemsCategoria',
        'prioridade',
    ];


    protected $casts = [
        'itemsRotulo' => 'array',
        'itemsCategoria' => 'array'
    ];

}
