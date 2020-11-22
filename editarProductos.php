<?php

include("Basedatos.php");

if (isset($_POST["botonEditar"])){ 
    
    //1. recibir los datos
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    
     //2. Recibir el id del usuario editar
     $id=$_GET["id"];

     //3. Crear un objeto de la clase BaseDatos
     $transaccion=new Basedatos();

     //4. Crear la consulta SQL para editar
     $consultaSQL="UPDATE productos SET precio='$precio',descripcion='$descripcion' WHERE idproducto='$id'";

    //5. Ejecute el metodo editarUsuario
    $transaccion->editarDatos($consultaSQL);

     //6. Redireccion a la vista que necesita 
     header("location:listadoProductos.php");
    
    }

?>  