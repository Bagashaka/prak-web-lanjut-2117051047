<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;
class KelasModel extends Model
{

    public function getKelas($id = null){
        if($id != null){
            return $this->select('kelas.*')->find($id);
        }
        return $this->findAll();
    }

    public function getAggotaKelas($id = null){
        return $this->select('kelas.*, user.nama')
        ->join('user', 'user.id_kelas = kelas.id')
        ->where('kelas.id', $id)
        ->findAll();
    }

    public function saveKelas($data){
        $this->insert($data);
    }
    public function updateKelas($data, $id){
        $this->update($id, $data);
    }

    public function deleteKelas($id)
    {
        try {
            $this->delete($id);
        } catch (mysqli_sql_exception $e) {
            if (str_starts_with($e->getMessage(), "Data too long for column")) {
                // handle the error
            } else {
                throw $e;
            }
        }
    }
    protected $DBGroup          = 'default';
    protected $table            = 'kelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
