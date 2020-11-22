<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
<h1>JUEGOS ACTUALES</h1>
        <div class="col col-20 text-right">
        <h1><a href="FormularioStore.php" class="btn btn-primary btn-lg ">REGISTRAR NUEVO JUEGO</a></h1>
        </div>
        <hr>
    </header>

<?php 
        
        include("Basedatos.php");
        
        //1. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //2.Crear la consulta para buscar datos
        $consultaSQL="SELECT * FROM productos WHERE 1";

        //3.Utilizar el metodo consultarDatos
        $productos=$transaccion->consultarDatos($consultaSQL);   
    
    ?>

    <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>

                <div class="col mb-4">

                    <div class="card h-100 border-info ">

                        <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="...">
                        <h4 class="card-header card-title"><?php echo($producto)["nombre"] ?></h4>
                        <div class="card-body text-info" >
                            <h5 class="card-text"> <?php echo($producto)["marca"] ?> </h5>
                            <hr>
                            <p class="card-text">Precio <?php echo($producto)["precio"] ?>$ </p>
                            <p class="card-text"> <?php echo($producto)["descripcion"] ?> </p>
                            <a href="eliminarProductos.php?id=<?php echo($producto["idproducto"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idproducto"]) ?>">
                            Editar
                        </div>
                        </div>

                    </div>

                    <div class="modal fade" id="editar<?php echo($producto["idproducto"]) ?>" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarProductos.php?id=<?php echo($producto["idproducto"]) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="number" class="form-control" name="precioEditar" value="<?php echo($producto)["precio"] ?>">
                                        </div>
                                        <div class="form-group">
                                                <label>Descripcion:</label>
                                                <textarea class="form-control"rows="3" name="descripcionEditar"><?php echo($producto)["descripcion"] ?> </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                    </form>
                                </div>

                        </div>

                    </div>

                </div>
            <?php endforeach?> 

        </div>

    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>