<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use App\Entities\Usuario;

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

      // session()->set('atencao', 'Olá Wilker, que bom que está conosco!');

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
        if(!$this->request->isAJAX()){
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

    public function criar()
    {
       $usuario = new Usuario();
        $data = [
            'titulo' => "Criando novo Usuário",
            'usuario' => $usuario
        ];

        return view('Admin/Usuarios/criar', $data);
    }

    public function cadastrar()
    {
        if($this->request->getMethod() === 'post'){
            $usuario = new Usuario($this->request->getPost());

            if($this->usuarioModel->protected(false)->save($usuario)){
                return redirect()->to(site_url("admin/usuarios/show/".$this->usuarioModel->getInsertID()))
                                                ->with('sucesso', "Usuário $usuario->nome cadastrado com sucesso!");
            }else{
                return redirect()->back()->with('errors_model', $this->usuarioModel->errors())
                                         ->with('atencao', "Por favor verifique os erros!")->withInput();
            }
        }else{
            return redirect()->back();
        }
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


    public function atualizar($id = null)
    {
        if($this->request->getMethod() === 'post'){
            $usuario = $this->buscaUsuarioOu404($id);
            $post = $this->request->getPost();

            if(empty($post['password'])){
                $this->usuarioModel->desabilitaValidacaoSenha();
                unset($post['password']);
                unset($post['password_confirmation']);
            }

            $usuario->fill($post);

            if(!$usuario->hasChanged()){
                return redirect()->back()->with('info', "Não há dados para atualizar!");
            }

            if($this->usuarioModel->protected(false)->save($usuario)){
                return redirect()->to(site_url("admin/usuarios/show/$usuario->id"))
                                                ->with('sucesso', "Usuário $usuario->nome atualizado com sucesso!");
            }else{
                return redirect()->back()->with('errors_model', $this->usuarioModel->errors())
                                         ->with('atencao', "Por favor verifique os erros!")->withInput();
            }
        }else{
            return redirect()->back();
        }
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
