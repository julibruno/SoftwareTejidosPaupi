<?php 
    require_once "../../Conexion/conexion.php";
    require_once "InsumosModel.php";

	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT Descripcion, DescripcionAbre, Color, Cantidad, FechaCreacion
			from insumos where id=  $id " ;
	$result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);
    

    $Insumo = new InsumosModel();





 ?>

