<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    
    public $primaryKey = 'id_tshirt';

    protected  $table = 'table_tshirt';

    protected $fillable = [
    	'nama_tshirt', 'type', 'warna_produk', 'ukuran', 'stock', 'harga'
    ];
}
