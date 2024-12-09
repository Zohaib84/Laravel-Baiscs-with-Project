<?php

namespace App\Models;

use App\Models\User;
use App\Models\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','image', 'status'];

    // or another way
    //protected $guarded = [];

    // Accessor
    public function title(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) =>ucfirst($value),
        );
    }


    // ========== GLobal scope=====//
    // protected static function booted()
    // {
    //     static::addGlobalScope(new PublishedScope);
    // }

        // Belongs to Realtion

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id', 'id');
        }

        //======= Belongs to Many==========//
        public function users(): BelongsToMany
        {
           // return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
           return $this->belongsToMany(User::class);
        }

        Public function images(): MorphOne
        {
            return $this->morphOne(Image::class, 'imagable');
        }




}
