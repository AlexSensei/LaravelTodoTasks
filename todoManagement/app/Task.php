<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content', 'priority', 'is_done'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
