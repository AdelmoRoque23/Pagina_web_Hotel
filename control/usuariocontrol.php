<?php
    class userControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/usuariomodel.php");
            $this->model = new userModel();
        }
        public function guardar($apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            $id = $this->model->insertar($apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario);
            return ($id!=false) ? header("Location:show.php?id_usuario=".$id) : header("Location:create.php");
        }
        public function show($id_usuario){
            return ($this->model->show($id_usuario) != false) ? $this->model->show($id_usuario) : header("Location:usuario.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_usuario,$apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            return ($this->model->update($id_usuario,$apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario) != false) ? header("Location:show.php?id=".$id_usuario) : header("Location:usuario.php");
        }
        public function delete($id_usuario){
            return ($this->model->delete($id_usuario)) ? header("Location:usuario.php") : header("Location:show.php?id=".$id_usuario) ;
        }
    }

?>


