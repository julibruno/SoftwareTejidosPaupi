<?php 


   require_once "../../Conexion/conexion.php";
   require_once "InsumosABM.php";
   

	$id=$_POST['id'];
    $Descripcion=$_POST['Descripcion'];
    $DescripcionAbre=$_POST['DescripcionAbre'];
    $Color=$_POST['Color'];
    

	$datos=array(
			$Descripcion,
			$DescripcionAbre,
			$id,
			$Color
				);
	$obj= new metodos();

	if($obj->actualizaDatosNombre($datos)==1){
		header("location:../../insumos.php?OKEdit");
	}else{
		header("location:../../404-page.html");
	}
 ?>