<?php
    class habitacionControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/habitacionmodel.php");
            $this->model = new habitacionModel();
        }
        public function guardar($numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen){
            $id = $this->model->insertar($numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen);
            return ($id!=false) ? header("Location:show.php?id_habitacion=".$id) : header("Location:create.php");
        }

        public function show($numero){
            return ($this->model->show($numero) != false) ? $this->model->show($numero) : header("Location:habitacion.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }

        public function update($id_habitacion,$numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen){
            return ($this->model->update($id_habitacion,$numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen) != false) ? header("Location:show.php?id=".$numero) : header("Location:habitacion.php");
        }
        public function delete($id_habitacion){
            return ($this->model->delete($id_habitacion)) ? header("Location:habitacion.php") : header("Location:show.php?id=".$id_habitacion) ;
        }



       
    }

?>
