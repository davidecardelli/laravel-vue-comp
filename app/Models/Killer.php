<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Killer extends Model
{
    protected $fillable = ['first_name', 'last_name', 'age', 'kills', 'wanted', 'picture'];
    use HasFactory;
}
