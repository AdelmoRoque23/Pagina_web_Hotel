<?php
    class detallepeModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($cant,$producto,$precio,$subtotal,$id_pedido){
            $stament = $this->PDO->prepare("INSERT INTO tb_detallepedido VALUES(null,:cant,:producto,:precio,:subtotal,:id_pedido)");
            $stament->bindParam(":cant",$cant);
            $stament->bindParam(":producto",$producto);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":subtotal",$subtotal);
            $stament->bindParam(":id_pedido",$id_pedido);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id_detallepedido){
            $stament = $this->PDO->prepare("SELECT * FROM tb_detallepedido where id_detallepedido = :id limit 1");
            $stament->bindParam(":id",$id_detallepedido);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_detallepedido");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function delete($id_detallepedido){
            $stament = $this->PDO->prepare("DELETE FROM tb_detallepedido WHERE id_detallepedido=:id");
            $stament->bindParam(":id",$id_detallepedido);
            return ($stament->execute()) ? true : false;
        }


        //operaciones

        public function showdet1($id_pedido){
            $stament = $this->PDO->prepare("SELECT * FROM tb_detallepedido where id_pedido = :id limit 1");
            $stament->bindParam(":id",$id_pedido);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }








       

    }

  




?>