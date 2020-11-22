<?php

    //1.Incluir el archivo BaseDatos
    include("Basedatos.php");
    //2. RECIBA AL ID A ELIMINAR
    $id=$_GET["id"];

    //3. Crear un objeto (sacar copia) de a clase BaseDatos
    $transaccion = new Basedatos();

    //4. Crear una consulta SQL para eliminar datos
    $consultaSQL="DELETE FROM productos WHERE idproducto='$id'";

    //5. Ejecute el metodo eliminarUsuario
    $transaccion->eliminarDatos($consultaSQL);

    //6. Redireccion a la vista que necesita 
    header("location:listadoProductos.php");


?>