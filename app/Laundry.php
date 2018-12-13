<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Laundry extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'laundry';
    
    protected $fillable = [
        'nama_pelanggan', 'no_telp','total_berat','total_harga',
    ];
}
