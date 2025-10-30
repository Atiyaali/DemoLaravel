<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    // Mass assignable fields
    protected $fillable = [
        // 'user_id',
        'title',
        'content',
    ];

    // Relationship: A post belongs to a user
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
