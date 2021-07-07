<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    protected $attributes=['email' => 'putri@gmail.com'];
    protected $guarded = [];
    public $timestamps = false;
}
