<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	/**
	 * The table associated with the model
	 * 
	 * @var string
	 */
    protected $table = 'hotel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the user that owns the hotel
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
