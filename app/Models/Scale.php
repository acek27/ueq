<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(Item::class, 'scale_id');
    }
}
