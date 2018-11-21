<?php 

#Clase controlador principal
#se encarga de poder cargar los modelos y las vistas
class Controller
{
	#cargar modelo
	
	public function modelo($modelo)
	{
		//carga
		require_once '../app/models/'.$modelo.'.php';
        //instanciar modelo
		return new $modelo();

	}

    
    #cargar vista
	public function vista($vista ,$datos = [])
	{
		#chequeamos si el archivo vista existe
		if (file_exists('../app/views/'.$vista.'.php')) {
			require_once '../app/views/'.$vista.'.php';
		}else{
            #si el archivo de la vista no existe
			redireccionar("/index");

		}
		

	}
	
	
}

