<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' => bcrypt('password'),
            'name' => 'Test',
            'post_code'=> '1234567',
            'address' => 'テストテスト1-2-3',
            'building' => 'テスト1'
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'fumiyo3362@tvvwybye.hkf',
            'password' => bcrypt('password'),
            'name' => '江田扶三代',
            'post_code'=> '3810052',
            'address' => '長野県長野市檀田3-16-13',
            'building' => ''
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'Yuzuki_Aida@fdeitoeo.th',
            'password' => bcrypt('password'),
            'name' => '合田結月',
            'post_code'=> '483-8381',
            'address' => '愛知県江南市後飛保町出島2-19',
            'building' => ''
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'ritsuko640@epeqxvv.bo.skk',
            'password' => bcrypt('password'),
            'name' => '安達理津子',
            'post_code'=> '349-1202',
            'address' => '埼玉県加須市小野袋1-11-6',
            'building' => '小野袋グランド407'
        ];
        DB::table('users')->insert($param);

        $param = [
            'email' => 'xykehlmasaki006@isrfxfdmd.zxe',
            'password' => bcrypt('password'),
            'name' => '小坂真幸',
            'post_code'=> '9691784',
            'address' => '福島県伊達郡国見町小坂1-5',
            'building' => '小坂スカイ117'
        ];
        DB::table('users')->insert($param);
    }
}
