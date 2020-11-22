<?php 


class conexion{
    private $user = "root";
    private $pass = "root";

    function conectar(){

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=conexionphp', $this->user, $this->pass );
       //     echo "Conexion correcta";

            $respuesta = $pdo->prepare("SELECT * FROM PRODUCTOS");

            $respuesta->execute();

            $productos =[];

            foreach($respuesta as $res){
                $productos[]= $res;
                
            }
            echo json_encode($productos);

        } catch (PDOException $error) {
            echo "No se pudo conetar: " . $error->getMessage(); 
        }

    }
 
}
$nuevaconexion = new conexion();
$nuevaconexion->conectar();

