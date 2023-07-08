<?php
    class productoModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$precio){
            $stament = $this->PDO->prepare("INSERT INTO tb_producto VALUES(null,:nombre,:precio)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":precio",$precio);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id_producto){
            $stament = $this->PDO->prepare("SELECT * FROM tb_producto where id_producto = :id limit 1");
            $stament->bindParam(":id",$id_producto);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_producto");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id_producto,$nombre,$precio){
            $stament = $this->PDO->prepare("UPDATE tb_producto SET nombre=:nombre, precio=:precio WHERE id_producto = :id_producto");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":id_producto",$id_producto);
            return ($stament->execute()) ? $id_producto : false;
        }
        public function delete($id_producto){
            $stament = $this->PDO->prepare("DELETE FROM tb_producto WHERE id_producto=:id");
            $stament->bindParam(":id",$id_producto);
            return ($stament->execute()) ? true : false;
        }
    }

?>

