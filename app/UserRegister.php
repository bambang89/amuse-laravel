<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'occupation',
        'proof_img',
        'created_at',
        'updated_at',
    ];
}
