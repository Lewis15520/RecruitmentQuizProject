<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table    = 'quizzes';
    protected $guarded  = ['id'];

    public function users()
    {
        return $this->belongsToMany(
          User::class,
            'quiz_user',
            'quiz_id',
            'user_id'
        );
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
