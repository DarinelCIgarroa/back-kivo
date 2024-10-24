<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    CONST CLIENT = 1;
    CONST DRIVER = 2;

    use HasFactory;
}
