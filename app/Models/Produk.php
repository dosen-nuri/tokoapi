<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = ['kode_produk','nama_produk','harga'];

    public $timestamps = false;
 
}