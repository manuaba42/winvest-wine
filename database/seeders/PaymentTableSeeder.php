<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentData = [
            [
                'sub_total' => 3364.2,
                'total' => 3364.2,
                'payment_made' => 3364.2,
                'balance_due' => 0,
                'invoice_id' => 1,
            ],
            [
                'sub_total' => 9642.5,
                'total' => 9642.5,
                'payment_made' => 9642.5,
                'balance_due' => 0,
                'invoice_id' => 2,
            ],
        ];

        DB::table('payment')->insert($paymentData);
    }
}
