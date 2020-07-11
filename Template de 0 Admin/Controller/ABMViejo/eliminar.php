<?php 
	$id=$_GET['id'];

    require_once "../../Conexion/conexion.php";
	require_once "InsumosABM.php";

	$obj= new metodos();
	if($obj->eliminarDatosNombre($id)==1){
        header("location:../../insumos.php");
	}else{
		echo "fallo al agregar";
	}
 ?>