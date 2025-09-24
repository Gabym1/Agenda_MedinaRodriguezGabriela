<?php
    class Conexion {
        public function conectar(): bool|mysqli{
            $host = "localhost";
            $usuario = "backend";
            $password = "backend2025";
            $base = "Agenda_Gabim";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            ); 
            return $conexion;
        }
    }
    
