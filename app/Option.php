<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['title', 'vote', 'poll_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function polls()
    {
        return $this->belongsTo(App\Poll::class);
    }
}
