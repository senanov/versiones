<?php

class Conexion
{
	public static function conectar (){
    
   $link =  new PDO("mysql:host=127.0.0.1; dbname=proyecto","root", "");
   return $link;

	}
	
}

?>