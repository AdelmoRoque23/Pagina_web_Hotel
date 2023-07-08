<?php
    class productoControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/productomodel.php");
            $this->model = new productoModel();
        }
        public function guardar($nombre,$precio){
            $id = $this->model->insertar($nombre,$precio);
            return ($id!=false) ? header("Location:show.php?id_producto=".$id) : header("Location:create.php");
        }
        public function show($id_producto){
            return ($this->model->show($id_producto) != false) ? $this->model->show($id_producto) : header("Location:producto.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_producto,$nombre,$precio){
            return ($this->model->update($id_producto,$nombre,$precio) != false) ? header("Location:show.php?id=".$id_producto) : header("Location:producto.php");
        }
        public function delete($id_producto){
            return ($this->model->delete($id_producto)) ? header("Location:producto.php") : header("Location:show.php?id=".$id_producto) ;
        }
    }

?>
