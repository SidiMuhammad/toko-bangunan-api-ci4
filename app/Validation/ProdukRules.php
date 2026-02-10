<?php

namespace App\Validation;

use App\Models\KategoriModel;

class ProdukRules
{
    public function cek_kategori(int $value, ?string &$error = null): bool {
        $kategoriModel = new KategoriModel();

        if ($kategoriModel->find($value) !== null) {
            return true;
        } else {
            $error = 'Kategori dengan ID ' . $value . ' tidak ditemukan';
            return false;
        }
    }
}
