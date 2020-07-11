<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $bd="artesaniaspaupi";
		private $password="";


		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		
		}

	}

	$conexion = new conectar();

    $conexion ->conexion();
   // echo '<script language="javascript">alert("juas");</script>';
    
	
 ?>


