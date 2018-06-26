<?php 
session_start ();

if ($_SESSION["autorizado"]!="1")
{
   header ("location: ../index.php");	
}



?>