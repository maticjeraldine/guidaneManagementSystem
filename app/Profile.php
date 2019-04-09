<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'first_name',
        'middle_name',
        'last_name',
        'course',
        'year',
        'semester',
        'gender',
        'address_city',
        'address_provincial',
        'birth_date',
        'birth_place',
        'nationality',
        'contact',
        'email',
        'others',
        'user_id',
    ];

  	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function violation()
    {
        return $this->belongsToMany(Violation::class);
    }
}
