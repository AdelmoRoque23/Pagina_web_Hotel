<?php

    class pedidoModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($id_habitacion,$total,$fecha,$id_usuario){
            $stament = $this->PDO->prepare("INSERT INTO tb_pedido VALUES(null,:id_habitacion,:total,:fecha,:id_usuario)");
            $stament->bindParam(":id_habitacion",$id_habitacion);
            $stament->bindParam(":total",$total);
            $stament->bindParam(":fecha",$fecha);
            $stament->bindParam(":id_usuario",$id_usuario);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }



        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_pedido");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

    }

    

?>