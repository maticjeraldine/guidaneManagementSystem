<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'description',
        'profile_id',
    ];

  	public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
