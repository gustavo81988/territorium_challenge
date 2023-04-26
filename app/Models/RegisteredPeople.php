<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredPeople extends Model
{
    use HasFactory;

    protected $table = 'registered_people';
    // protected $guarded = ['id'];
}
