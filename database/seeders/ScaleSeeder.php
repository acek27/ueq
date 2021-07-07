<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Scale;
use Illuminate\Database\Seeder;

class ScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'scale_name' => 'attractive', //id 1 (otomatis sesuai urut)
                'code' => 'att',
            ],
            [
                'scale_name' => 'perpicuity', //id 2
                'code' => 'per',
            ],
             [
                'scale_name' => 'eficiency', //id 3
                'code' => 'ef',
            ],
            [
                'scale_name' => 'dependability', //id 4
                'code' => 'de',
            ],
            [
                'scale_name' => 'stimulasi', //id 5
                'code' => 'sti',
            ],
            [
                'scale_name' => 'novelty', //id 6
                'code' => 'nov',
            ],
        ];
        foreach ($data as $datum) {
            Scale::create($datum);
        }
    }
}
