

<?php 

	class conectar{
		public function conexion(){

			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$baseDatos = "konami_juegos";
			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$baseDatos);
			return $conexion;
		}
	}


 ?>