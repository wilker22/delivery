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

       // session()->set('sucesso', 'Olá Wilker, que bom que está conosco!');

        return view('Admin/Usuarios/index', $data);
    }


    /**
     * @uso Controller ususarios no método procurar  com o autocomplete
     * @param string $term
     * @return array usuarios
     */
    public function procurar()
    {
        // echo '<pre>';
        // print_r($this->request->getGet());
        // exit;
        if(!$this->requst->isAJAX()){
            exit('Página Não encontrada!');
        }

        $usuarios = $this->usuarioModel
                         ->procurar($this->request->getGet('term'));

        $retorno = [];

        foreach($usuarios as $usuario){
            $data['id'] = $usuarios->id;
            $data['value'] = $usuario->nome;

            $retorno[] = $data;
        }

        return $this->response->setJSON($retorno);



    }

    public function show($id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);
        //echo '<pre>';
        //print_r($usuario);
        //exit;
        $data = [
            'titulo' => "Detalhando o Usuário: $usuario->nome",
            'usuario' => $usuario
        ];

        return view('Admin/Usuarios/show', $data);
    }

    public function editar($id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);
        //echo '<pre>';
        //print_r($usuario);
        //exit;
        $data = [
            'titulo' => "Detalhando o Usuário: $usuario->nome",
            'usuario' => $usuario
        ];

        return view('Admin/Usuarios/editar', $data);
    }

    /**
     * 
     * @param int $id
     * @return objeto usuario
     */
    private function buscaUsuarioOu404(int $id = null)
    {
        if(!$id || !$usuario = $this->usuarioModel->where('id', $id)->first()){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
        }

        return $usuario;
    }
}
