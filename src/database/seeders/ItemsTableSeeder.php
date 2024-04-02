<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'name' => 'bag',
            'image' => 'example',
            'price' => 10000,
            'state' => '未使用',
            'explanation' => 'ダミーデータです。'
        ];
        DB::table('items')->insert($param);
    }
}
