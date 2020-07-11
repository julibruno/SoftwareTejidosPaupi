<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertar($tabla,$columnas,$datos){
			$c= new conectar();
			$conexion=$c->conexion();

			
            
            $SentenciaColumnas = implode(",", $columnas);

            $SentenciaDatos = implode("','", $datos);


			$sql="INSERT into $tabla ($SentenciaColumnas)
							values ('$SentenciaDatos')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function Update($tabla,$columnas,$datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE $tabla set $columnas[1]='$datos[1]',
									 $columnas[2]='$datos[2]',
									 $columnas[3]='$datos[3]'
								where $columnas[0]='$datos[0]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function Eliminar($tabla,$id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="UPDATE $tabla set estado= 0								 
								where id=$id";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>