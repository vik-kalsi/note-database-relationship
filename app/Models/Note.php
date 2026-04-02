<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['content', 'user_id'];

    #Added Below
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
