<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    protected $fillable = ['weapon_number','weapon_name','type_weapon','weapon_mag','weapon_asg_dek','image'];
    use HasFactory;
}
