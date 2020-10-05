<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_videojuegos (nombre,tipo,fechalanzamiento,descripcion)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]')";
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_videojuegos,
							nombre,
							tipo,
							fechalanzamiento,descripcion
							from t_videojuegos
					where id_videojuegos='$idjuego'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_videojuegos' => $ver[0],
				'nombre' => $ver[1],
				'tipo' => $ver[2],
				'fechalanzamiento' => $ver[3],
				'descripcion' => $ver[4]
				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_videojuegos set nombre='$datos[0]',
										tipo='$datos[1]',
										fechalanzamiento='$datos[2]',
										descripcion='$datos[3]'
						where id_videojuegos='$datos[4]'";
			return mysqli_query($conexion,$sql);
		}
		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_videojuegos where id_videojuegos='$idjuego'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>