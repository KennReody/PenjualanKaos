<?php

use Illuminate\Database\Seeder;

class TshirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	'nama_tshirt' 	=>'Screamous',
            'type' 			=>'Polo',
            'warna_produk' 	=>'Hitam',
            'ukuran' 		=>'M',
            'stock' 		=>'5',
            'harga' 		=>'120000',
        ];

        DB::table('table_tshirt')->insert($data);

        $data = [
        	'nama_tshirt' 	=>'Bloods',
            'type' 			=>'Polo',
            'warna_produk' 	=>'Putih',
            'ukuran' 		=>'L',
            'stock' 		=>'5',
            'harga' 		=>'120000',
        ];

        DB::table('table_tshirt')->insert($data);
    }
}
