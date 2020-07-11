
	  <!--<script src="assets/Funciones.js"></script>-->

<?php 
	require_once "../../Conexion/conexion.php";
	
	require_once "../General/ABM.php";


	$Descripcion=$_POST['Descripcion'];
	$DescripcionAbre=$_POST['DescripcionAbre'];
	$Color=$_POST['Color'];
	$IdUnidadMedida=$_POST['IdUnidadMedida'];
	$FechaCreacion = date("Y-m-d H:i:s");
	$FechaActualizacion = date("Y-m-d H:i:s");
	$Estado= "1";

	$tabla="unidadmedida";

	$columnas=array(
		$ColDescripcion = 'Descripcion',
		$ColDescripcionAbre = 'DescripcionAbre',
		$ColColor = 'Color',
		$IdUnidadMedida = 'Unidad',
		$ColFechaCreacion = 'FechaCreacion',
		$ColFechaActualizacion= 'FechaActualizacion',
		$ColEstado = 'Estado'
	);


	$datos=array(
		$Descripcion,
		$DescripcionAbre,
		$FechaCreacion,
		$FechaActualizacion,
		$Estado
				);

	$obj= new metodos();
	if($obj->insertar($tabla,$columnas,$datos)==1){
		header("location:../../UnidadMedida.php?OK");
		
		
	}else{
		header("location:../../404-page.html");
	}


 ?>