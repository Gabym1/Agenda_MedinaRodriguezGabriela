<?php
    class Conexion {
        public function conectar(): bool|mysqli{
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $base = "agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            ); 
            return $conexion;
        }
    }
    