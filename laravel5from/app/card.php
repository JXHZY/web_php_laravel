<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    public function notes()
    {
    	return $this->hasMany('App\note');
    }

    public function path()
    {
    	return '/cards/'.$this->id;
    }

    public function addNote(note $note)
    {
    	return $this->notes()->save($note);
    }
}