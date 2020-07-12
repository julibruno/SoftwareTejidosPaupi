
	  <!--<script src="assets/Funciones.js"></script>-->

<?php 
	require_once "../../Conexion/conexion.php";
	
	require_once "../General/ABM.php";




	$Descripcion=$_POST['Descripcion'];
	$DescripcionAbre=$_POST['DescripcionAbre'];
	$Color=$_POST['Color'];
	$IdUnidadMedida=$_POST['idunidadmedida'];
	$FechaCreacion = date("Y-m-d H:i:s");
	$FechaActualizacion = date("Y-m-d H:i:s");
	$Estado= 1;

	$tabla="insumos";

	$columnas=array(
		$ColDescripcion = 'Descripcion',
		$ColDescripcionAbre = 'DescripcionAbre',
		$ColColor = 'Color',
		$ColIdUnidadMedida = 'IdUnidadMedida',
		$ColFechaCreacion = 'FechaCreacion',
		$ColFechaActualizacion= 'FechaActualizacion',
		$ColEstado = 'Estado'
	);


	$datos=array(
		$Descripcion,
		$DescripcionAbre,
		$Color,
		$IdUnidadMedida,
		$FechaCreacion,
		$FechaActualizacion,
		$Estado
				);



	
		$obj= new conectar();
		$conexion=$obj->conexion();
		$id=$_GET['id'];
		$sql="SELECT id
				from Insumos where Descripcion= '$Descripcion' and Estado = 1" ;
		$result=mysqli_query($conexion,$sql);
		//$ver=mysqli_fetch_row($result);

				
		if($result->num_rows == 0){

			$obj= new metodos();
			if($obj->insertar($tabla,$columnas,$datos)==1){
				header("location:../../Insumos.php?OK");
				
				
			}else{
				header("location:../../404-page.html");
			}
		}else{
			header("location:../../Insumos.php?Yaexiste" );	
		}

		

 ?>