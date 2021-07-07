<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
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
                'item_left' => 'menyusahkan', //tulis bahasa indonesianya
                'item_right' => 'menyenangkan', //tulis bahasa indonesianya
                'code' => 'senang', //singkatan dari nama item
                'scale_id' => 1, //sesuaikan dengan id di scaleseeder
                'category' => 1, //ditulis 1 ketika kanan positif, 0 ketika kiri positif
            ],
            [
                'item_left' => 'tak dapat dipahami',
                'item_right' => 'dapat dipahami',
                'code' => 'paham',
                'scale_id' => 2,
                'category' => 1,
            ],
            [
                'item_left' => 'kreatif',
                'item_right' => 'monoton',
                'code' => 'kreatif',
                'scale_id' => 6,
                'category' => 0,
            ],
             [
                'item_left' => 'mudah dipelajari',
                'item_right' => 'sulit dipelajari',
                'code' => 'mudahdipelajari',
                'scale_id' => 2,
                'category' => 0,
            ],
             [
                'item_left' => 'bermanfaat',
                'item_right' => 'kurang bermanfaat',
                'code' => 'bermanfaat',
                'scale_id' => 5,
                'category' => 0,
            ],
             [
                'item_left' => 'membosankan',
                'item_right' => 'mengasyikkan',
                'code' => 'mengasyikkan',
                'scale_id' => 5,
                'category' => 1,
            ],
             [
                'item_left' => 'tidak menarik',
                'item_right' => 'menarik',
                'code' => 'menarik',
                'scale_id' => 5,
                'category' => 1,
            ],
             [
                'item_left' => 'tak dapat diprediksi',
                'item_right' => 'dapat diprediksi',
                'code' => 'diprediksi',
                'scale_id' => 4,
                'category' => 0,
            ],
             [
                'item_left' => 'cepat',
                'item_right' => 'lambat',
                'code' => 'cepat',
                'scale_id' => 3,
                'category' => 0,
            ],
             [
                'item_left' => 'berdaya cipta',
                'item_right' => 'konvensional',
                'code' => 'daya cipta',
                'scale_id' => 6,
                'category' => 0,
            ],
             [
                'item_left' => 'menghalangi',
                'item_right' => 'mendukung',
                'code' => 'menghalangi',
                'scale_id' => 4,
                'category' => 1,
            ],
             [
                'item_left' => 'baik',
                'item_right' => 'buruk',
                'code' => 'baik',
                'scale_id' => 1,
                'category' => 0,
            ],
             [
                'item_left' => 'rumit',
                'item_right' => 'sederhana',
                'code' => 'sederhana',
                'scale_id' => 2,
                'category' => 1,
            ],
             [
                'item_left' => 'tidak disukai',
                'item_right' => 'menggembirakan',
                'code' => 'menggembirakan',
                'scale_id' => 1,
                'category' => 1,
            ],
             [
                'item_left' => 'lazim',
                'item_right' => 'terdepan',
                'code' => 'terdepan',
                'scale_id' => 6,
                'category' => 1,
            ],
             [
                'item_left' => 'tidak nyaman',
                'item_right' => 'nyaman',
                'code' => 'nyaman',
                'scale_id' => 1,
                'category' => 1,
            ],
             [
                'item_left' => 'aman',
                'item_right' => 'tidak aman',
                'code' => 'aman',
                'scale_id' => 4,
                'category' => 0,
            ],
             [
                'item_left' => 'memotivasi',
                'item_right' => 'tidak memotivasi',
                'code' => 'memotivasi',
                'scale_id' => 5,
                'category' => 0,
            ],
             [
                'item_left' => 'memenuhi ekpektasi',
                'item_right' => 'tidak memenuhi ekspektasi',
                'code' => 'ekspektasi',
                'scale_id' => 4,
                'category' => 0,
            ],
             [
                'item_left' => 'tidak efisien',
                'item_right' => 'efisien',
                'code' => 'efisien',
                'scale_id' => 3,
                'category' => 1,
            ],
             [
                'item_left' => 'jelas',
                'item_right' => 'membingungkan',
                'code' => 'jelas',
                'scale_id' => 2,
                'category' => 0,
            ],
             [
                'item_left' => 'tidak praktis',
                'item_right' => 'praktis',
                'code' => 'praktis',
                'scale_id' => 6,
                'category' => 1,
            ],
             [
                'item_left' => 'terorganisasi',
                'item_right' => 'berantakan',
                'code' => 'terorganisasi',
                'scale_id' => 3,
                'category' => 0,
            ],
             [
                'item_left' => 'atraktif',
                'item_right' => 'tidak atraktif',
                'code' => 'atraktif',
                'scale_id' => 1,
                'category' => 0,
            ],
             [
                'item_left' => 'ramah pengguna',
                'item_right' => 'tidak ramah pengguna',
                'code' => 'ramah',
                'scale_id' => 1,
                'category' => 0,
            ],
             [
                'item_left' => 'konservatif',
                'item_right' => 'inovatif',
                'code' => 'konservatif',
                'scale_id' => 6,
                'category' => 1,
            ],
        ];
        foreach ($data as $datum) {
            Item
            ::create($datum);
        }
    }
}
