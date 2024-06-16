<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Hasmany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';

    protected $fillable = [
        'kategori_kode',
        'kategori_nama',
    ];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }



//     use HasFactory;

//     protected $table = 'm_kategori'; //to define the name of the table used
//     protected $primaryKey = 'kategori_id'; //to define the primary key of the table used

// //    protected $fillable = ['level_id', 'username', 'nama', 'password'];
//     protected $fillable = ['kategori_kode', 'kategori_nama'];

//     public function barang(): BelongsTo
//     {
//         return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
//     }
}