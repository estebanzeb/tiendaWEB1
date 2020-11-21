<?php

    include("Basedatos2.php");

    if (isset($_POST["botonEnvio"])){   
 
        //1. recibir los datos
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $genero=$_POST["genero"];

        //2. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos2();

        //3. crear una consulta SQL para agregar datos
        $consultaSQL= "INSERT INTO producto(nombre, marca, precio, descripcion) VALUES ('$nombre', '$marca', '$precio', '$descripcion')";

        //4. Utilizar el metodo agregarDatos()
        $transaccion->agregarDatos($consultaSQL);
               
    }

?>