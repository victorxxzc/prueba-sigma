<?php

    class conectar{
        private $servidor="178.128.146.252";
		private $usuario="admin_sigmauser";
		private $password="pfaDKIJyPF";
        private $bd="admin_sigmatest";
        
        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
        }
    }

?>