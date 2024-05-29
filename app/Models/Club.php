<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_img',
        'cover_img',
        'name',
        'description',
    ];

    public function members()
    {
        return $this->hasMany(Club_members::class, 'id_club');
    }

    public function membersCount()
    {
        return $this->members()->count();
    }
}
