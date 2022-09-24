<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();    
    }


    public function index()
    {
        $data = [
            'titulo' => 'Listando Usuários',
            'usuarios' => $this->usuarioModel->findAll()
        ];

        return view('Admin/Usuarios/index', $data);
    }

    public function procurar()
    {
        if(!$this->requst->isAJAX()){
            exit('Página Não encontrada!');
        }

        $usuarios = $this->usuarioModel->procurar($this->request->getGet('term'));

        $retorno = [];

        foreach($usuarios as $usuario){
            $data['id'] = $usuarios->id;
            $data['value'] = $usuario->nome;

            $retorno[] = $data;
        }

        return $this->response->setJSON($retorno);



    }
}
