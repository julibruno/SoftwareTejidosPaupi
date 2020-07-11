<?php 
    require_once "Conexion/conexion.php";
    
    
    $obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT Descripcion, DescripcionAbre
			from UnidadMedida where id=  $id " ;
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejidos Paupi /Unidades de Medida</title>


    <link rel="stylesheet" href="assets/estilos.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>
<body>
  
     <?php include "index.html" ?>
     <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
                
                


                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Unidades de Medida</h2>
                                <!--<p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>-->
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Stock</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Unidades de Medida</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- Formulario Create  -->
                    <!-- ============================================================== -->

                
                    <!--
                    <button onclick="ejecutaAlerta()">muestra mensaje</button>

                    <script type="Text/javascript">
                   $("#alerta").remove();
                    </script>   
                 -->   
                

                    <p class="alert alert-success agileits hidden"  id="alerta" role="alert" style="display:none">Insumo agregado correctamente! <p>
                    
                    <p class="alert alert-success agileits hidden"  id="alertaEdit" role="alert" style="display:none">Insumo editado correctamente! <p>

                    <p class="alert alert-danger agileits hidden"  id="alertaError" role="alert" style="display:none"> <p>
                
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Editar Unidad de Medida: <?php echo $ver[0] ?> </h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate action="Controller/UnidadMedida/editar.php" method="post" id="Form_Create_UnidMedida">
                                        <div class="row">
                                        <input type="text" hidden value="<?php echo $id ?>" name="id">
                                        <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Descripcion</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="<?php echo $ver[0] ?>" name="Descripcion" required minlength="4">
                                               
                                            </div>
                                            <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Descripcion Abreviada</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="<?php echo $ver[1] ?>" name="DescripcionAbre" required>
                                                
                                            </div>
                                            
                                            
                                            <h1> </h1>
                                            <div class="EspacioSup col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit" >Editar</button>
                                              
                                                <a  class="btn btn-secondary"  href="UnidadMedida.php">Cancelar</a>
                                              
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>

                    <!-- ============================================================== -->
                    <!-- Fin Create  -->
                    <!-- ============================================================== -->

                   
                

                </div>



                                        



                </div>         
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->

        
        <script src="assets/ValidacionesUnidMedida.js"></script>
        <!--<script src="assets/Funciones.js"></script>-->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    

</body>
</html>