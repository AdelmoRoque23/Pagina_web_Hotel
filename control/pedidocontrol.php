<?php
    
    class pedidoControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/pedidomodel.php");
            $this->model = new pedidoModel();
        }
        public function guardar($id_habitacion,$total,$fecha,$id_usuario){
             $this->model->insertar($id_habitacion,$total,$fecha,$id_usuario);            
        }


        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
       
    } 
    
?>