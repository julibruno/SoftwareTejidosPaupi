<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$hoy = date("Y-m-d H:i:s");

			$sql="INSERT into insumos (Descripcion,DescripcionAbre,Color,Cantidad,FechaCreacion)
							values ('$datos[0]','$datos[1]','$datos[2]','0','$hoy')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE Insumos set Descripcion='$datos[0]',
									 DescripcionAbre='$datos[1]',
									 Color='$datos[3]'
								where id='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from insumos where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>