<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
	protected $fillable = [
    	'description',
    	'published_date',
    	'scheduled_date',
    	'status',
    	'owner',
    ];

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_date'] = Carbon::createFromFromat('Y-m-d',$date);
    }

    public function customers(){
    	return $this->belongsTo('\App\User');
    }    
}