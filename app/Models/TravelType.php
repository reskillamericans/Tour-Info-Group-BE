<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelType extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    protected $table = 'tourapp_traveltype';

    public function tours(){

	    return $this->hasMany('App\Tour');
	
    }
}
