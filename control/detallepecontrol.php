<?php
    class detallepeControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/detallepemodel.php");
            $this->model = new detallepeModel();
        }
        public function guardar($cant,$producto,$precio,$subtotal,$id_pedido){
            $this->model->insertar($cant,$producto,$precio,$subtotal,$id_pedido);          
        }

        public function show($id_detallepedido){
            return ($this->model->show($id_detallepedido) != false) ? $this->model->show($id_detallepedido) : header("Location:pedidos.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }

        public function delete($id_detallepedido){
            return ($this->model->delete($id_detallepedido)) ? header("Location:pedidos.php") : header("Location:show.php?id=".$id_detallepedido) ;
        }


        //operaciones

        public function showdet1($id_pedido){
            return ($this->model->show($id_pedido) != false) ? $this->model->show($id_pedido) : header("Location:pedidos.php");
        }
       

       
    }

    
?>