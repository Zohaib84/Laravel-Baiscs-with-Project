<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //====== Has One Realtion =====//
    public function post()
    {
        return $this->hasOne('Post::class', 'user_id','id');
    }

    //============ Has through ===== //
    public function postComment():HasOneThrough
    {
        return $this->HasOneThrough(Comment::class, Post::class, 'user_id', 'post_id', 'id', 'id');
         // or //
         //return $this->HasOneThrough(Comment::class, Post::class);
    }

    public function postComments():HasManyThrough
    {
        return $this->HasManyThrough(Comment::class, Post::class);
    }

}
