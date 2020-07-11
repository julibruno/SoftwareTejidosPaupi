
	  <script src="assets/Funciones.js"></script>

<?php 
	require_once "../../Conexion/conexion.php";
	require_once "InsumosABM.php";


	$Descripcion=$_POST['Descripcion'];
    $DescripcionAbre=$_POST['DescripcionAbre'];
    $Color=$_POST['Color'];
 

	$datos=array(
			$Descripcion,
            $DescripcionAbre,
            $Color
				);
	$obj= new metodos();
	if($obj->insertarDatosNombre($datos)==1){
		header("location:../../insumos.php?OK");

		
	}else{
		header("location:../../404-page.html");
	}


 ?>