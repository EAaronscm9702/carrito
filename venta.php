<?php
include("include/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <style>
        .cantidad{
            width: 30m;
        }
    </style>
</head>
<body>
    <?php 
    // Lenguaje en php
    include("include/menu.php");

    ?>

    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>REGISTRAR NUEVA VENTA</h4>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-md-4 col-sm-12">DNI: </label>
                                            <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="dni cliente">
                                            <button class="btn btn-success col-lg-2 col-md-2 col-sm-4">Buscar</button>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-md-4 col-sm-12">Apellidos y Nombres: </label>
                                            <input type="text" name="ApeyNom" class="form-control col-lg-6 col-md-6 col-sm-12" readonly>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-md-4 col-sm-12">Usuario: </label>
                                            <select name="usuario" id="usuario" class="form-control col-lg-6 col-md-6 col-sm-12">
                                                <option value="1">usuario1</option>
                                                <option value="2">usuario2</option>
                                                <option value="3">usuario3</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-md-2 col-sm-6">Productos: </label>
                                            <input type="number" name="producto" class="form-control col-lg-2 col-md-2 col-sm-6" required placeholder="codigo producto">
                                            <label class="col-lg-1 md-lg-1 col-lg-1"></label>
                                            <button class="btn btn-success col-lg-1 col-md-2 col-sm-2">Buscar</button>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-md-4 col-sm-12">Fecha y Hora: </label>
                                            <label for="" class="form-control col-lg-6 col-md-6 col-sm-12">
                                                <?php
                                                date_default_timezone_set("America/Lima");
                                                echo date("d-m-y - h:i:s");?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="6" class="text-center">PRODUCTOS</th>
                                                </tr>
                                                <tr>
                                                    <th width="5%">Nro</th>
                                                    <th width="60%">Descripción</th>
                                                    <th width="10%">Cant.</th>
                                                    <th width="10%">P.unit</th>
                                                    <th width="10%">Importe</th>
                                                    <th width="5%"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nombre Producto</td>
                                                    <td><input type="number" value="2"></td>
                                                    <td>S/. 50.00</td>
                                                    <td>S/.100.00</td>
                                                    <td><button class="btn btn-danger">x</button></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-center">TOTAL</td>
                                                    <td>S/.100.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- FIN DE CONTENIDO -->


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>