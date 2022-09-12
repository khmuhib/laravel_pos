<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_group_id',
        'admin_id',
        'name',
        'email',
        'phone',
        'address'
    ];
}
