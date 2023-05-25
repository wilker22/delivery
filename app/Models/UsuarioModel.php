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

   

    protected $validationRules = [
        'nome'     => 'required|min_length[4]|max_length[120]',
        'email'        => 'required|valid_email|is_unique[usuarios.email]',
        'telefone' => 'required',
        'cpf'        => 'required|exact_lenght[14]|is_unique[usuarios.cpf]',
        'password'     => 'required|min_length[8]',
        'password_confirmation' => 'required_with[password]|matches[password]',
    ];
    protected $validationMessages = [
        'nome' => [
            'required' => 'Campo obrigatório!',
            
        ],
        'email' => [
            'required' => 'Campo obrigatório!',
            'is_unique' => 'O e-mail informado já existe, escolha outra conta de e-mail!',
        ],
        'cpf' => [
            'required' => 'Campo obrigatório!',
            'is_unique' => 'O CPF informado já existe, escolha outra conta de e-mail!',
        ],
    ];

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

    public function desabilitaValidacaoSenha()
    {
        unset($this->validationRules['password']);
        unset($this->validationRules['password_confirmation']);
    }

   
}
