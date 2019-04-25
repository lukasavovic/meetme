<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title', 'description', 'user_id'];

    public function options()
    {
        return $this->hasMany(App\Option::class);
    }
    public function users()
    {
        return $this->hasOne(App\User::class);
    }
}
