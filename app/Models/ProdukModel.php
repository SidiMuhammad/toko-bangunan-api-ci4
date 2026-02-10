<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = [
        'id_kategori',
        'nama_produk',
        'harga_produk',
        'stok_produk'
    ];
    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'id_kategori'   => 'required|integer|cek_kategori',
        'nama_produk'   => 'required|min_length[3]',
        'harga_produk'  => 'required|numeric|greater_than_equal_to[0]',
        'stok_produk'   => 'required|integer|greater_than_equal_to[0]',
    ];
    protected $validationMessages = [
        'id_produk' => [
            'required' => 'Id kategori harus diisi'
        ],
        'nama_produk' => [
            'required' => 'Nama produk harus diisi',
            'min_length' => 'Nama produk minimal 3 karakter',
        ],
        'harga_produk' => [
            'required' => 'Harga produk harus diisi',
            'numeric'  => 'Harga produk harus berupa angka',
            'greater_than_equal_to' => 'Harga produk tidak boleh negatif',
        ],
        'stok_produk' => [
            'required' => 'Stok produk harus diisi',
            'integer'  => 'Stok produk harus bilangan bulat',
            'greater_than_equal_to' => 'Stok produk tidak boleh negatif',
        ],
    ];
}
