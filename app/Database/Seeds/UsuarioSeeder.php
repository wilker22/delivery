<?php

namespace App\Database\Seeds;

use App\Models\UsuarioModel;
use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new UsuarioModel();

        $usuario = [
            'nome' => 'Wilker Alves',
            'email' => 'wilker@wtech.com',
            'cpf' => '728.882.294-04',
           ' telefone' => '87 - 98827-3964',
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            'nome' => 'Fulano de tal',
            'email' => 'fulano@wtech.com',
            'cpf' => '718.882.294-04',
           ' telefone' => '87 - 98827-3964',
        ];

        $usuarioModel->protect(false)->insert($usuario);
    }
}
