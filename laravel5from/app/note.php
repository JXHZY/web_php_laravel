<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
	protected $fillable = ['body'];

	public function card()
    {
    	return $this->belongsTo('App\card');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
