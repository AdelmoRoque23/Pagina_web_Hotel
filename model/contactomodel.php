<?php
    class contactoModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$correo,$asunto,$mensaje,$fecha,$id_usuario){
            $stament = $this->PDO->prepare("INSERT INTO tb_contacto VALUES(null,:nombre,:correo,:asunto,:mensaje,:fecha,:id_usuario)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":asunto",$asunto);
            $stament->bindParam(":mensaje",$mensaje);
            $stament->bindParam(":fecha",$fecha);
            $stament->bindParam(":id_usuario",$id_usuario);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_contacto");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

    }

?>