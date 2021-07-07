<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function scales()
    {
        return $this->belongsTo(Scale::class);
    }
}
