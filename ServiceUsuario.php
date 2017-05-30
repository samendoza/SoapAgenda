<?php
include 'BD/DataBase.php';

class ServiceUsuario {
    
    public function getUsuario($usuario){
        $db = new DataBase();
        $db->conectar();

        $query = "Select * from usuarios where id = '".$usuario."'";
        $result = $db->consulta($query);
        $res = array();
        while($row = mysqli_fetch_assoc($result)){
           $res[] = $row;
        }
        $db->desconectar();
        return $res;  
    }
    
    public function registrarUsuario($usuario, $pass, $imagen){
        $db = new DataBase();
        $db->conectar();
        $query = "insert into usuarios (id, pass, fotoUsuario) values('".$usuario."','".$pass."','".$imagen."')";

        if($db->consulta($query)) {
            $db->desconectar();
            return "registrado con exito";
        }

        $db->desconectar();
        return "problemas al registrar";
    }
}
