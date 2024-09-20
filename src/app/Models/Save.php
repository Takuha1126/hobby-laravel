<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Save extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'most_recommended_hobby',
        'other_recommended_hobbies'
    ];

    protected $casts = [
        'other_recommended_hobbies' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
