<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy A52', 
                'description' => 'SAMSUNG Galaxy A52 merupakan hp terbaik untuk harian dengan kamera utama resolusi tinggi dan juga layar jernih untuk menikmati konten dan bermain game.', 
                'price'=> 485.00, 
                'qty'=> 21 ,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'name' => 'EPSON EcoTank L3210', 
                'description' => 'Printer Type: Print/Scan/Copy, Print Speed : Up to 33.0 ppm (Black)/ 15.0 ppm (Color), Maximum Paper Size: 215.9 x 1200 mm, Printing Maximum Resolution: 5760 x 1440 dpi
                Interface: USB 2.0
                Unit Utama', 
                'price'=> 237.93, 
                'qty'=> 38 ,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'name' => 'Menzerna Super Finish Plus 3800 1 Liter', 
                'description' => 'Finishing polish, Kemasan : 1 Liter, Polish yang halus akan menghilangkan tanda pengamplasan sebesar 2500 grit dari cat dan menghilangkan kabut gabungan untuk membuat cat terlihat halus dan berkilau', 
                'price'=> 32.71, 
                'qty'=> 100,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'name' => 'VIEWSONIC Projector M1 Mini Plus', 
                'description' => 'Type : DLP LED, Resolusi Asli: 854x480, Kecerahan: 120 (LED Lumens), Rasio Kontras: 500:1', 
                'price'=> 349.25, 
                'qty'=> 10 ,
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'name' => 'SOLUTION BS100 - Black', 
                'description' => 'Handheld Scanner, 650 nm laser diode, 120 times/second, USB', 
                'price'=> 50.65, 
                'qty'=> 11 ,
                'created_at' => now(), 
                'updated_at' => now(),
            ],

        ]);
    }


}
