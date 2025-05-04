<?php

require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController{

    private $usuario;

    public function __construct(){
        $this->usuario=new Usuario();
    }

     
    public function index() {
        $usuarios = $this->usuario->all();
        include __DIR__ . '/../views/index.php';
    }

    public function find($id) {
        $usuario = $this->usuario->find($id);
        include __DIR__ . '/../views/editar.php';
    }

    public function update($id, $nombre, $apellido) {
        $userUpdate = $this->usuario->update($id, $nombre, $apellido);
        header('Location: index.php');
    }

    public function delete($id){
        $userDelete = $this->usuario->delete($id);
        header('Location: index.php');
    }

    public function create() {
        include __DIR__ . '/../views/crear.php';
        
    }

    public function store($data) {
        $userCreate = $this->usuario->store($data);
        header('Location: index.php');
    }
}

?>