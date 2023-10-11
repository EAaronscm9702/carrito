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
                        <h4>SISTEMA</h4>
                        <div class="card">
                            <div class="card-body">
                                <form action="operaciones/registrar_usuario.php" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">COLOR DEL CORREO:</label>
                                        <input type="text"
                                        name="colcorr"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">SERVIDOR DEL CORREO:</label>
                                        <input type="text"
                                        name="sercorr"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">USUARIO DEL CORREO:</label>
                                        <input type="text"
                                        name="usucorr"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">CONTRASEÑA DEL CORREO:</label>
                                        <input type="password"
                                        name="concorr"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">PUERTO DEL CORREO:</label>
                                        <input type="text"
                                        name="puecorr"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12">DOMINIO:</label>
                                        <input type="text"
                                        name="domin"
                                        placeholder=""
                                        class="form-control col-lg-9 col-md-9 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                        <button type="submit" class="btn btn-success">Guarda</button>
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