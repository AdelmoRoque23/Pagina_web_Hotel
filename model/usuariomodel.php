<?php
    class userModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            $stament = $this->PDO->prepare("INSERT INTO tb_usuario VALUES(NULL,:apellidos_nombre,:genero_usuario,:usuario,:password,:localidad_usuario,:fecha_creausuario,:estado_usuario,:rol_usuario)");
            $stament->bindParam(":apellidos_nombre",$apellidos_nombre);
            $stament->bindParam(":genero_usuario",$genero_usuario);
            $stament->bindParam(":usuario",$usuario);
            $stament->bindParam(":password",($password));
            $stament->bindParam(":localidad_usuario",$localidad_usuario);
            $stament->bindParam(":fecha_creausuario",$fecha_creausuario);
            $stament->bindParam(":estado_usuario",$estado_usuario);
            $stament->bindParam(":rol_usuario",$rol_usuario);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id_usuario){
            $stament = $this->PDO->prepare("SELECT * FROM tb_usuario where id_usuario = :id limit 1");
            $stament->bindParam(":id",$id_usuario);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tb_usuario");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id_usuario,$apellidos_nombre,$genero_usuario,$usuario,$password,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            $stament = $this->PDO->prepare("UPDATE tb_usuario SET apellidos_nombre=:apellidos_nombre, genero_usuario=:genero_usuario, usuario=:usuario, password=:password, localidad_usuario=:localidad_usuario, fecha_creausuario=:fecha_creausuario, estado_usuario=:estado_usuario, rol_usuario=:rol_usuario WHERE id_usuario=:id_usuario");
            $stament->bindParam(":apellidos_nombre",$apellidos_nombre);
            $stament->bindParam(":genero_usuario",$genero_usuario);
            $stament->bindParam(":usuario",$usuario);
            $stament->bindParam(":password",$password);
            $stament->bindParam(":localidad_usuario",$localidad_usuario);
            $stament->bindParam(":fecha_creausuario",$fecha_creausuario);
            $stament->bindParam(":estado_usuario",$estado_usuario);
            $stament->bindParam(":estado_usuario",$estado_usuario);
            $stament->bindParam(":rol_usuario",$rol_usuario);
            $stament->bindParam(":id_usuario",$id_usuario);
            return ($stament->execute()) ? $id_usuario : false;
        }



        public function delete($id_usuario){
            $stament = $this->PDO->prepare("DELETE FROM tb_usuario WHERE id_usuario=:id");
            $stament->bindParam(":id",$id_usuario);
            return ($stament->execute()) ? true : false;
        }
    }

?>
