<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Kategori extends ResourceController
{
    protected $modelName = 'App\Models\KategoriModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);

        if($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Kategori dengan id '.$id.' tidak ditemukan');
        }
    }

    public function create()
    {
        $data = $this->request->getJSON(true);
            
        if($this->model->insert($data)) {
            return $this->respond([
                'message' => 'Kategori berhasil ditambahkan'
            ]);
        } else {
            return $this->failValidationErrors($this->model->errors());
        }
    }

    public function update($id = null)
    {
        if($this->model->find($id)) {
            $data = $this->request->getJSON(true);
            
            if($this->model->update($id, $data)) {
                return $this->respond([
                    'message' => 'Kategori dengan id '.$id.' berhasil diperbarui'
                ]);
            } else {
                return $this->failValidationErrors($this->model->errors());
            }
        } else {
            return $this->failNotFound('Kategori dengan id '.$id.' tidak ditemukan');
        }
    }

    public function delete($id = null)
    {
        if($this->model->find($id)) {
            $this->model->delete($id);
            return $this->respondDeleted([
                'message' => 'Kategori dengan id '.$id.' berhasil dihapus'
            ]);
        } else {
            return $this->failNotFound('Kategori dengan id '.$id.' tidak ditemukan');
        }
    }
}
