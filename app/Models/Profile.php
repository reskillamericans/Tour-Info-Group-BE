<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'address', 'city', 'state', 'zip', 'phone_number', 'birth_month', 'birth_year', 'user_id'];

    protected $table = 'profile';
}
