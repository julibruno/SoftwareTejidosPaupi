
<?php 
	require_once "../../Conexion/conexion.php";
	
	require_once "../General/ABM.php";

	$id=$_POST['id'];
	$Descripcion=$_POST['Descripcion'];
	$DescripcionAbre=$_POST['DescripcionAbre'];
	$Color=$_POST['Color'];
	$FechaActualizacion = date("Y-m-d H:i:s");
	$tabla="insumos";

	$columnas=array(
        $ColId= 'id',
		$ColDescripcion = 'Descripcion',
		$ColDescripcionAbre = 'DescripcionAbre',
		$Color = 'Color',
		$ColFechaActualizacion= 'FechaActualizacion',
	);


	$datos=array(
        $id,
        $Descripcion,
		$DescripcionAbre,
        $FechaActualizacion,
				);

	$obj= new metodos();
	if($obj->Update($tabla,$columnas,$datos)==1){
		header("location:../../UnidadMedida.php?OKEdit");
		
		
	}else{
		header("location:../../404-page.html");
	}


 ?>