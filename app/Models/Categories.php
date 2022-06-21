<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
}
// một nhiều và thuộc về belong to, hasmany
// trong product chứa function product-type, ... 