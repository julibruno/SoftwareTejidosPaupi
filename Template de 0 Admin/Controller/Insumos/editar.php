<?php 
    require_once "../../Conexion/conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT Descripcion, DescripcionAbre, Color, Cantidad, FechaCreacion
			from insumos where id=  $id " ;
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="actualizar.php" method="post">
    <label>Codigo Insumo</label>
    <input type="text" hidden="" value="<?php echo $id ?>" name="id">
	<label>Codigo Insumo</label>
	<p></p>
	<input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
	<p></p>
	<label>Descripcion</label>
	<p></p>
	<input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
	<p></p>
	<button>Descripcion Abreviada</button>
</form>
</body>
</html>