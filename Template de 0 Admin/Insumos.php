<?php 
    require_once "Conexion/conexion.php";
    require_once "Controller/General/ABM.php";
   
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
                                            <li class="breadcrumb-item active" aria-current="page">Insumos</li>
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
                                <h5 class="card-header">Nuevo Insumo</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate action="Controller/UnidadMedida/insertar.php" method="post" id="Form_Create_UnidMedida">
                                        <div class="row">
                                        <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Descripcion</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" name="Descripcion" required minlength="4">
                                               
                                            </div>
                                            <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Descripcion Abreviada</label>
                                                <input type="text" maxlength="10" class="form-control" id="validationCustom01" placeholder="" value="" name="DescripcionAbre" requireddata-toggle="tooltip" data-placement="top" title="Maximo 10 Caracteres">
                                                
                                            </div>
                                            <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Unidad de Medida</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" name="Descripcion" required minlength="4">
                                               
                                            </div>
                                            <div class="EspacioSup col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                                <label for="validationCustom01">Color</label>
                                                <input type="text" maxlength="10" class="form-control" id="validationCustom01" placeholder="" value="" name="DescripcionAbre" requireddata-toggle="tooltip" data-placement="top" title="Maximo 10 Caracteres">
                                                
                                            </div>
                                            
                                            <h1> </h1>
                                            <div class="EspacioSup col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit" >Guardar</button>
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

                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                        
                   


                    <!--=============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Insumos</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first ">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>DescripcionAbre</th>
                                                <th>Color</th>
                                                <th>Cantidad</th>
                                                <th>Unidad Medida</th>
                                                <th>Acciones</th>
                                                
                                            </tr>
                                        </thead>

                            <?php
                                    $obj= new metodos();
                                    $sql="SELECT i.id, i.Descripcion,i.DescripcionAbre,i.Color,i.Cantidad,u.DescripcionAbre as Uni
                                    FROM insumos as i inner join unidadmedida AS u on 
                                    (i.IdUnidadMedida=u.Id)
                                    WHERE i.Estado=1" ;
                                    $datos=$obj->mostrarDatos($sql);
                                  
                                    foreach ($datos as $key ) {
                                    ?>
                                     <!--   <tbody> -->
                                            <tr>
                                                <td><?php echo $key['id'] ?></td>
                                                <td><?php echo $key['Descripcion'] ?></td>
                                                <td><?php echo $key['DescripcionAbre'] ?></td>
                                                <td><?php echo $key['Color'] ?></td>
                                                <td><?php echo $key['Cantidad'] ?></td>
                                                <td><?php echo $key['Uni'] ?></td>
                                                <td>
                                            
                                                <a href="UnidadMedidaEdit.php?id=<?php echo $key['id'] ?>" data-toggle="tooltip" data-placement="top" title="Editar">
                                                    <img src="Imagenes/ABM/Editar.png">
                                                    
                                                    </a>
                                                    <!--<a href="Controller/UnidadMedida/eliminar.php?id=<?php echo $key['id'] ?>"  -->
                                                   

                                                <a href="#" data-href="Controller/UnidadMedida/eliminar.php?id=<?php echo $key['id'] ?>" data-toggle="modal" data-target="#confirm-delete">
                                                    <img src="Imagenes/ABM/Borrar.png">
                                                   <!-- <button type="" class="" onclick="return ConfirmEliminar()"></button>    -->
                                                </a>
                                               
                                                


                                                    </td>
                                            </tr>
                                                                
                            
                                           
                                     <!--   </tbody>-->
                                        <?php 
                            
                                                       
                                        }
                                            
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->

                    
                 </div>
                   
                

                </div>



                                        



                </div>         
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->


        <!-- MODAL PARA ELIMINAR  -->
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                        <div class="modal-content">
                                        <div class="modal-header">
                                           Eliminacion de Unidad de Medida
                                        </div>
                            <div class="modal-body">
                        ¿Esta seguro que desea eliminar el registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-danger btn-ok">Eliminar</a>
                            </div>
                        </div>
                </div>
        </div>
        
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