<?php

namespace App\Validation;

use App\Models\KategoriModel;

class ProdukRules
{
    protected $errorMessage = '';

    public function cek_kategori($value): bool {
        $kategoriModel = new KategoriModel();

        if ($kategoriModel->find($value) !== null) {
            return true;
        } else {
            $this->errorMessage = 'Kategori dengan ID '.$value.' tidak ditemukan';

            return false;
        }
    }

    public function getErrorMessage(): string {
        return $this->errorMessage;
    }
}
