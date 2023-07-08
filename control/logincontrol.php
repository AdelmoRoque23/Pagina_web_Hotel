<?php
    class loginControl{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/casagrau/model/loginmodel.php");
            $this->model = new loginModel();
        }
        public function guardar($apellidos_nombre,$genero_usuario,$nom_usuario,$clave_usuario,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario){
            $this->model->insertar($apellidos_nombre,$genero_usuario,$nom_usuario,$clave_usuario,$localidad_usuario,$fecha_creausuario,$estado_usuario,$rol_usuario);
            
        }
       
    }

    
    /*if(!empty($_POST["btnacceso"])){
        if(!empty($_POST["n_user"]) and !empty($_POST["n_pass"])){
            $usuario=$_POST["n_user"];
            $password=$_POST["n_pass"];
            $sql=$conexion->query("select * from tb_usuario where nom_usuario='$usuario' and clave_usuario='$password' ");
            if($datos=$sql->fetch_objet()){
                header("location: index.php");
            }else{echo "<div class='alert alert-danger'>Acceso denegado</div>";}
        }else{echo "Campos vacíos";}
    }*/

    
?>