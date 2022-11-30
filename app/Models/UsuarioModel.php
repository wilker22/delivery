<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    
    protected $table            = 'usuarios';
    protected $returnType       = 'App\Entities\Usuario';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['nome', 'email', 'telefone', ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deletado_em';

    public function procurar($term)
    {
        if($term === null){
            return [];
        }

        return $this->select('id', 'nome')
                        ->like('nome', $term)
                        ->get()
                        ->getResult();
    }

   
}
