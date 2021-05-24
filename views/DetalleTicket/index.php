<?php

require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {

?>

    <!DOCTYPE html>
    <html>
    <?php
    require_once("../MainHead/header.php");
    ?>
    <title>SorsDk || Consultar Ticket</title>
    </head>

    <body class="with-side-menu">

        <?php
        require_once("../MainHeader/header.php");
        ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php
        require_once("../MainNav/nav.php")
        ?>

        <!-- Contenido -->
        <div class="page-content">
            <div class="container-fluid">

                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3 id="lblnumticket"></h3>
                                <span  id="lblestado">Cerrado</span>
                                <span class="label label-pill label-primary" id="lblnomusuario"></span>
                                <span class="label label-pill label-default" id="lblfechcrea">99/99/9999</span>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Detalle Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="cat_nom" class="form-label semibold">Categoría</label>
                                <input type="text" class="form-control" id="cat_nom" name="cat_nom"  readonly>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label for="tick_titulo" class="form-label semibold">Título</label>
                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo"  readonly>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tickd_descripx">Descripción</label>
                                    <div class="summernote-theme-1">
                                        <textarea name="tickd_descripx" id="tickd_descripx" class="summernote"></textarea>
                                    </div>
                            </fieldset>
                        </div>
                    </div>
                </div>


                <section class="activity-line" id="lbldetalle">
                    
                </section>
                <!--.activity-line-->
                <div class="box-typical box-typical-padding">
                    <p>Ingrese su duda o consulta</p>
                    <div class="row">

                            <div class="col-lg-12">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="tickd_descrip">Descripción</label>
                                    <div class="summernote-theme-1">
                                        <textarea name="tickd_descrip" id="tickd_descrip" class="summernote"></textarea>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                                <button type="submit" id="btncerrarticket" class="btn btn-rounded btn-inline btn-danger">Cerrar Ticket</button>
                            </div>
                    </div>
                </div>

            </div>
        </div>


        <?php
        require_once("../MainJs/js.php");
        ?>

        <script type="text/javascript" src="detalleticket.js"></script>

    </body>

    </html>

<?php
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}

?>