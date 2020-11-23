<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body background="https://pa1.narvii.com/6687/5944a520e39597c747c4dbf5bdd17ec7499077f4_hq.gif">
    <header>
        <h1 class="font-italic text-info">TIENDA DE VIDEO JUEGOS</h1>
        <div class="col col-20 text-right">
        <h1><a href="listadoProductos.php" class="btn btn-primary btn-lg ">VISUALIZAR JUEGOS ACTUALES</a></h1>
        </div>
        <hr>
    </header>
    <main>
        <div class="container">
            <form action="RegistroProductos.php" method="POST">
                <h1 class="text-info">REGISTRO DE PRODUCTOS</h1>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marca" required>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio($)" maxlength="3" name="precio" required>
                    </div>
                </div>
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold text-info">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion" required></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold text-info">Foto:</label>
                        <input type="text" class="form-control" placeholder="URL fotografia" name="foto" required>
                    </div>
                </div>

                <div class="row mt-3">
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
                </div>

            </form>
        </div>

        <?php 
        
            include("Basedatos.php");
            
            //1. crear una copia de la clase BD
            //crear un objeto de la clase bd
            $transaccion=new Basedatos();

            //2.Crear la consulta para buscar datos
            $consultaSQL="SELECT * FROM `producto` WHERE 1";

            //3.Utilizar el metodo consultarDatos
            $usuarios=$transaccion->consultarDatos($consultaSQL); 
        
        ?>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>