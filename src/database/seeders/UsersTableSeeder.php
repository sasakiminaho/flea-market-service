<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'test@example.com',
            'password' => \Hash::make('test'),
            'name' => 'test',
            'post_code' => '1080014',
            'address' => '東京都港区芝5丁目29-20',
            'building' => '610'
        ];
        DB::table('users')->insert($param);
    }
}
