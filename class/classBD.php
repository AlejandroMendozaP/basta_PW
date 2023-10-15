<?php

class BaseDatos{
    
    //Atributo
    var $conexion;
    var $bloque;
    var $numeRegistros;
    var $error;
    //1.- Crear una conexión
    function abrirConexion(){
        $this->conexion=mysqli_connect("localhost", "UBasta", "123", "basta"); //servidor, usuario, contrasenia, base_datos
    }
    //4.- Cerrar
    function cierreBD(){
        mysqli_close($this->conexion);
    }

    //2.- Hacer una consulta
    function consulta($p_query){
    
        $this->abrirConexion();
        $this->bloque=mysqli_query($this->conexion, $p_query);
        $this->error=mysqli_error($this->conexion);
        if(strpos(strtoupper($p_query), "SELECT")!==false)
            $this->numeRegistros=mysqli_num_rows($this->bloque);
        $this->cierreBD();
    }

    function getTupla($p_query){
        $this->consulta($p_query);
        return mysqli_fetch_object($this->bloque);
    }

    //3.- Consumir los datos (Procesarlos)

}

$obBD = new BaseDatos();

?>