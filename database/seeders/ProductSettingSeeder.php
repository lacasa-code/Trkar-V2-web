<?php

namespace Database\Seeders;

use App\Models\ProductSetting;
use Illuminate\Database\Seeder;

class ProductSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSetting::create ([
            'id'=>1,
            'key'=>'tax',
            'value'=>15,

        ]);
    }
}
