<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club_members extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_club',
        'function',
    ];

    public function club()
    {
        return $this->belongsTo(club::class, 'id');
    }
}
