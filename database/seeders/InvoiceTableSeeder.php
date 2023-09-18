<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoiceData = [
            [
                'date_invoice' => '2023-04-04 00:00:00',
                'terms' => 'Net 30',
                'date_due' => '2023-04-05 00:00:00',
                'po' => 'SO-01433',
                'investor_id' => 1,
            ],
            [
                'date_invoice' => '2023-08-31 00:00:00',
                'terms' => 'Net 30',
                'date_due' => '2023-09-30 00:00:00',
                'po' => 'SO-01745',
                'investor_id' => 2,
            ],
        ];

        DB::table('invoice')->insert($invoiceData);
    }
}
