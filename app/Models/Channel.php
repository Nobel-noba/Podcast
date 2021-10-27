<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'channel_name',
        'cover_photo',
        'bio'
    ];

    public function podcasts(){
        return $this->hasMany(Podcast::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'subscribes', 'channel_id', 'user_id');
    }
}
