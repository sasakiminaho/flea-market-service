<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'payment' => 'コンビニ支払い'
        ];
        DB::table('payments')->insert($param);

        $param = [
            'payment' => '現金引換'
        ];
        DB::table('payments')->insert($param);

        $param = [
            'payment' => 'クレジットカード支払い'
        ];
        DB::table('payments')->insert($param);

        $param = [
            'payment' => '銀行振込'
        ];
        DB::table('payments')->insert($param);
    }
}
