<?php

    include("Basedatos.php");

    if (isset($_POST["botonEnvio"])){   
 
        //1. recibir los datos
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $foto=$_POST["foto"];

        //2. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //3. crear una consulta SQL para agregar datos
        $consultaSQL= "INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre', '$marca', '$precio', '$descripcion', '$foto')";

        //4. Utilizar el metodo agregarDatos()
        $transaccion->agregarDatos($consultaSQL);

        //5. Redireccion a la vista que necesita 
        header("location:listadoProductos.php");
               
    }

?>
