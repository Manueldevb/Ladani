<?php  
	require_once "mainModel.php";

	class usuarioModelo extends mainModel{

		/*--- Modelo agregar usuario ---*/
		protected static function agregar_usuario_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO usuario (usuario_dni,usuario_nombre,usuario_apellido,usuario_telefono,usuario_direccion,usuario_email,usuario_usuario,usuario_clave,usuario_estado,usuario_privilegio) VALUES(:DNI,:Nombre,:Apellido,:Telefono,:Direccion,:Email,:Usuario,:Clave,:Estado,:Privilegio)");
			
			$sql->db2_bind_param(":DNI",$datos['DNI']);
			$sql->db2_bind_param(":Nombre",$datos['Nombre']);
			$sql->db2_bind_param(":Apellido",$datos['Apellido']);
			$sql->db2_bind_param(":Telefono",$datos['Telefono']);
			$sql->db2_bind_param(":Direccion",$datos['Direccion']);
			$sql->db2_bind_param(":Email",$datos['Email']);
			$sql->db2_bind_param(":Usuario",$datos['Usuario']);
			$sql->db2_bind_param(":Clave",$datos['Clave']);
			$sql->db2_bind_param(":Estado",$datos['Estado']);
			$sql->db2_bind_param(":Privilegio",$datos['Privilegio']);
			$sql->execute();

			return $sql;
		}

	}

?>