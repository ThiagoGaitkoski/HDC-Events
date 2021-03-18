<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //FAZ ENTENDER QUE O REQUEST DE ITEMS É EM ARRAY
    protected $casts = [
        'items' => 'array'
    ];
}
