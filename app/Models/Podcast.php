<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable=[
        'channel_id',
        'picture_path',
        'title',
        'description',
        'podcast_path'
    ];

    public function channel(){
        return $this->belongsTo(Channel::class);
    }

    public function userPodcast(){
        return $this->belongsToMany(User::class, 'saveds', 'podcast_id', 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
