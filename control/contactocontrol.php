<?php
    class contactoControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/contactomodel.php");
            $this->model = new contactoModel();
        }
        public function guardar($nombre,$correo,$asunto,$mensaje,$fecha,$id_usuario){
            $this->model->insertar($nombre,$correo,$asunto,$mensaje,$fecha,$id_usuario);            
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }



       
    }

    
?>