<?php
include("include/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css"/>
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php 
    //lenguaje php
    include("include/menu.php");
    ?>

    <!--INICIO CONTENIDO-->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>REGISTRO DE USUARIOS</h4>
                        <div class="card">
                            <div class="card-body">
                                <form action="operaciones/registrar_usuario.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">DNI:</label>
                                        <input type="number"
                                        name="dni"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Nombres y Apellidos:</label>
                                        <input type="text"
                                        name="ApeyNom"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Correo Electronico:</label>
                                        <input type="email"
                                        name="correo"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Telefono:</label>
                                        <input type="number"
                                        name="telefono"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Dirección:</label>
                                        <input type="text"
                                        name="direccion"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Fecha de Nacimiento:</label>
                                        <input type="date"
                                        name="fechaNa"
                                        placeholder=""
                                        class="form-control col-lg-3 col-md-3 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Rol:</label>
                                        <select name="id_rol" id="">
                                            <option value=""></option>
                                            <?php
                                            $b_roles = "SELECT * FROM roles";
                                            $r_b_roles = mysqli_query($conexion, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) { ?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['nombre']?></option>
                                            <?php }
                                            ?>
                                            <option value="3">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">Foto:</label>
                                        <input type="file" name="foto" placeholder="" class="form-control col-lg-3 col-md-3 col-sm-12" required accept="image/*">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN CONTENIDO-->

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