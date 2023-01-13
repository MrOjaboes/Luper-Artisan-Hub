<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasFactory;
    protected $fillable = [
        'fullname',
        'email',
        'contact_one',
        'contact_two',
        'gender',
        'work_address',
        'marital_status',
        'birth_date',
        'yrs_of_experience',
        'certification',
        'photo',
        'status',
        'user_id',
        'location',
        'state_of_origin',
        'proffession',
        'education',
        'notes'

    ];
}
