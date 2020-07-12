
<?php 
	require_once "../../Conexion/conexion.php";
	
	require_once "../General/ABM.php";

	$id=$_GET['id'];
    $tabla="insumos";

	$obj= new metodos();
	if($obj->Eliminar($tabla,$id)==1){
		header("location:../../insumos.php?Eliminado");
		
		
	}else{
		header("location:../../404-page.html");
	}


 ?>