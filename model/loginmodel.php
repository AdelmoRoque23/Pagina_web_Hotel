<?php
    class loginModel{
        private $PDO;
        public function __construct() 
        {
            require_once("c://xampp/htdocs/casagrau/conection/conection.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($apellidos_nombre,$genero_usuario,$nom_usuario,$clave_usuario,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            $stament = $this->PDO->prepare("INSERT INTO tb_usuario VALUES(null,:apellidos_nombre,:genero_usuario,:usuario,:password,:localidad_usuario,:fecha_creausuario,:estado_usuario,:rol_usuario)");
            $stament->bindParam(":apellidos_nombre",$apellidos_nombre);
            $stament->bindParam(":genero_usuario",$genero_usuario);
            $stament->bindParam(":usuario",$nom_usuario);
            $stament->bindParam(":password",$clave_usuario);
            $stament->bindParam(":localidad_usuario",$localidad_usuario);
            $stament->bindParam(":fecha_creausuario",$fecha_creausuario);
            $stament->bindParam(":estado_usuario",$estado_usuario);
            $stament->bindParam(":rol_usuario",$rol_usuario);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

       

        /*
        if(!empty($_POST["btnacceso"])){
            if(!empty($_POST["n_user"]) and !empty($_POST["n_pass"])){
                $usuario=$_POST["n_user"];
                $password=$_POST["n_pass"];
                $sql=$conection->query("select * from tb_usuario where nom_usuario='$usuario' and clave_usuario='$password' ");
                if($datos=$sql->fetch_objet()){
                    header("location: index.php");
                }else{echo "<div class='alert alert-danger'>Acceso denegado</div>";}
            }else{echo "Campos vacíos";}
           
        }*/
    
       
    }

?>
