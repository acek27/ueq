<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    protected $guarded = [];
    protected $attributes = ['status' => 0];
    public $timestamps = false;
    protected $with = ['kuesioner'];

    public function kuesioner()
    {
        return $this->hasOne(Kuesioner::class, 'responden_id')->withDefault();
    }
}
