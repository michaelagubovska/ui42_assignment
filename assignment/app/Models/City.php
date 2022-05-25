<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name','mayor','city_hall_address','phone', 'fax', 'email', 'web_address', 'coat_of_arms_path'];
    use HasFactory;
}
