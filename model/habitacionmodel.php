<?php
    class habitacionModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function insertar($numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen){
            $stament = $this->PDO->prepare("INSERT INTO tb_habitacion VALUES('',:numero,:categoria,:precio,:nivel,:tipo,:descripcion,:imagen)");
            $stament->bindParam(":numero",$numero);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":nivel",$nivel);
            $stament->bindParam(":tipo",$tipo);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":imagen",$imagen);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($numero){
            $stament = $this->PDO->prepare("SELECT * FROM tb_habitacion where numero = :id limit 1");
            $stament->bindParam(":id",$numero);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_habitacion");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id_habitacion,$numero,$categoria,$precio,$nivel,$tipo,$descripcion,$imagen){
            $stament = $this->PDO->prepare("UPDATE tb_habitacion SET numero=:numero, categoria=:categoria, precio=:precio, nivel=:nivel, tipo=:tipo, descripcion=:descripcion, imagen=:imagen     WHERE id_habitacion = :id_habitacion");
            $stament->bindParam(":numero",$numero);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":nivel",$nivel);
            $stament->bindParam(":tipo",$tipo);
            $stament->bindParam(":descripcion",$descripcion);
            $stament->bindParam(":imagen",$imagen);
            $stament->bindParam(":id_habitacion",$id_habitacion);
            return ($stament->execute()) ? $id_habitacion : false;
        }
        public function delete($id_habitacion){
            $stament = $this->PDO->prepare("DELETE FROM tb_habitacion WHERE id_habitacion=:id");
            $stament->bindParam(":id",$id_habitacion);
            return ($stament->execute()) ? true : false;
        }





        
    }

?>

