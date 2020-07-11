
<?php 
	require_once "../../Conexion/conexion.php";
	
	require_once "../General/ABM.php";

	$id=$_GET['id'];
    $tabla="unidadmedida";

	$obj= new metodos();
	if($obj->Eliminar($tabla,$id)==1){
		header("location:../../UnidadMedida.php?OKEdit");
		
		
	}else{
		header("location:../../404-page.html");
	}


 ?>