<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WineInvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wineInvoiceData = [
            [
                'wine' => '1x Case (3 Bottles 75cl) Cartuxa | Pera Manca | Red | 2015 | Doc Alentejo',
                'wine_description' => '',
                'qty' => 2,
                'unit' => '750ML BOT',
                'rate' => 1890,
                'discount' => 415.8,
                'amounts' => 3364.2,
                'invoice_id' => 1, 
            ],
            [
                'wine' => 'Cartuxa Wooden Case of 3x 75cl bottles | Pera Manca | Red | 2015 | Doc Alentejo | Vivino 4.7',
                'wine_description' => 'Fixed Interest 6% for 5 Yr Buy-Back',
                'qty' => 5,
                'unit' => 'pack',
                'rate' => 2003.5,
                'discount' => 375,
                'amounts' => 9642.5,
                'invoice_id' => 2, 
            ],
        ];

        DB::table('wine_invoice')->insert($wineInvoiceData);
    }
}
