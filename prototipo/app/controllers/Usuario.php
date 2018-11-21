<?php
session_start();
class Usuario extends Controller
{

    public function __construct()
    {

        $this->usuarioModelo = $this->modelo('UsuarioModel');
    }

    public function index()
    {

        $this->vista("paginas/inicio");

    }

    public function modulo($modulo = 0)
    {
        $this->vista("paginas/$modulo");
    }

    #metodo para registrar un usuario
    public function registrar()
    {
        #validamos si vienen valores por el metodo Post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            #recibimos la contraseña y la encriptamos y hacemos el arreglo de datos
            $encriptar = crypt($_POST["contra"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $datos     = array("ndocumento" => strip_tags(trim($_POST["ndocumento"])), "tdocumento"  => strip_tags($_POST["tdocumento"]),
                "primer_nombre"                 => strip_tags($_POST["primer_nombre"]), "segundo_nombre" => strip_tags($_POST["segundo_nombre"]), "primer_apellido" => strip_tags($_POST["primer_apellido"]), "segundo_apellido" => strip_tags($_POST["segundo_apellido"]),
                "contra"                        => strip_tags($encriptar), "contra1"                     => strip_tags($_POST["contra1"]), "correo"                 => strip_tags($_POST["correo"]), "rol"                       => "3", "estado" => "1");

            #validamos si las contraseña y su confirmacion son diferentes
            if (strip_tags($_POST["contra"]) != strip_tags($_POST["contra1"])) {
                $datos = array('mensaje' => 'Las contraseñas no coinciden');
                $this->vista("paginas/registrar", $datos);
            } else {

                #Llamamos el metodo validarUsuarioModel para validar que no este registrado en la base de datos
                if (!$this->usuarioModelo->validarUsuarioModel($datos)) {
                    if ($this->usuarioModelo->registrarUsuariomodel($datos)) {
                        $datos = array('aviso' => 'El Usuario Se Registro con exito', 'alert' => 'success');
                        $this->vista("paginas/inicio", $datos);
                    } else {

                        $datos = array('mensaje' => 'algo salio mal');
                        $this->vista("paginas/registrar", $datos);

                    }
                } else {
                    $datos = array('mensaje' => 'Un usuario ya se encuentra registrado con este Numero de documento o Correo');
                    $this->vista("paginas/registrar", $datos);
                }
            }

        } else {

            $this->vista("paginas/registrar");

        }

    } #fin del metodo

    #consultar si el usuario esta en el sistema
    public function consultar()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $consulta = strip_tags(trim($_POST["consulta"]));

            if ($respuesta = $this->usuarioModelo->consultarUsuarioModel($consulta)) {
                $datos = array('usuario' => $respuesta);

                $this->vista("paginas/consultar", $datos);

            } else {

                $this->vista("paginas/consultar");

            }

        } else {

            $this->vista("paginas/consultar");

        }

    } #fin del metodo

    #restablecer la contraseña si se ha olvidado
    public function restablecer()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $mensaje  = 'ingrese al siguiente link para restablecer clave "' . RUTA_URL . '/usuario/restablecerPassword"';
            $asunto   = 'Restablecer clave Senanov';
            $cabecera = 'from:senanov2018@gmail.com' . phpversion();

            $email     = strip_tags($_POST["envio_email"]);
            $respuesta = $this->usuarioModelo->restablecerModel($email);

            if (isset($respuesta->correo)) {
                if ($respuesta->correo == $_POST['envio_email']) {
                    if (mail($email, $asunto, $mensaje, $cabecera)) {
                        $_SESSION["correo"] = $email;
                        $datos              = array('exito' => "El correo se ha enviado exitosamente");
                        $this->vista('paginas/restablecer', $datos);

                    } else {
                        $datos = array('error' => "No se pudo enviar el correo");
                        $this->vista('paginas/restablecer', $datos);
                    }
                }
            } else {

                $datos = array('error' => "El correo ingresado " . $email . " no se encuentra registrado en la plataforma");
                $this->vista('paginas/restablecer', $datos);

            }

        } else {

            $this->vista('paginas/restablecer');
        }
    } #fin del metodo

    #restablecer la contraseña
    public function restablecerPassword()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $encriptar = crypt(strip_tags($_POST["cambioContrasena"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            if ($_POST["cambioContrasena"] == $_POST["cambioContrasena1"]) {
                $cambiar = $encriptar;

                if ($respuesta = $this->usuarioModelo->restablecerPasswordModel($cambiar, $_SESSION["correo"])) {

                    $_SESSION["correo"]=0;
                    $datos = array('aviso' => 'La Contraseña Se Cambio Con Exito', 'alert' => 'success');
                    $this->vista("paginas/inicio", $datos);
                } else {
                    $datos = array('aviso' => 'Algo Salio Mal No se Pudo Cambiar La Contraseña ', 'alert' => 'danger');
                    $this->vista("paginas/inicio", $datos);
                }

            } else {
                $datos = array('aviso' => 'Las Contraseñas No Coinciden');
                $this->vista("paginas/restablecerPassword", $datos);
            }

        } else {
            if ($_SESSION["correo"]!=0) {
                $this->vista("paginas/restablecerPassword");
            } else {
                redireccionar("/usuario");
            }

        }

    } #fin del metodo

    #Valida si los datos ingresados en el login son correctos
    public function login()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $encriptar = crypt(strip_tags($_POST["contrai"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            if ($respuesta = $this->usuarioModelo->loginModel(strip_tags($_POST["usuario"]))) {

                if ($respuesta->documento_usuario == $_POST["usuario"] && $respuesta->contrasena == $encriptar && $respuesta->estado == 1) {

                    $nombre   = $respuesta->primer_nombre . " " . $respuesta->segundo_nombre;
                    $apellido = $respuesta->primer_apellido . " " . $respuesta->segundo_apellido;
                    $rol      = $respuesta->tipo_rol;

                    $_SESSION["rol"]       = $respuesta->rol;
                    $_SESSION["ingreso"]   = $respuesta->rol;
                    $_SESSION["usuario"]   = "$nombre $apellido <br> <center>$rol</center>";
                    $_SESSION["docPerfil"] = $respuesta->documento_usuario;

                    redireccionar("/novedad/index");
                } else {

                    $datos = array('errorLogin' => 'Usuario o Contraseña Incorrecto');
                    $this->vista("paginas/inicio", $datos);

                }

            } else {

                $datos = array('errorLogin' => 'Usuario o Contraseña Incorrecto');
                $this->vista("paginas/inicio", $datos);

            }

        } else {

            $this->vista("paginas/inicio");

        }

    } #fin del metodo

    public function consultarUsuario()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            #borramos los caracteres especiales si bienen en el inpun y los espacion del inicio y fin y lo asignamos a la variable documento
            #si la consulta es diferente al documento del super administrador
            if (strip_tags(trim($_POST["docUsuario"])) != SUPER_ADMINISTRADOR) {
                $documento = strip_tags(trim($_POST["docUsuario"]));

                #si se encuentran datos los enviamos a la vista;
                if ($datos = $this->usuarioModelo->consultarUsuarioModel($documento)) {

                    $this->vista("usuario/consultas/consultarUsuario", $datos);

                    #si no se encuentran datos el usuario no presenta noivedad
                } else {
                    $datos = array('aviso' => 'El usuario no presenta Registro', 'alert' => 'danger');

                    $this->vista("usuario/consultas/consultarUsuario", $datos);
                }
            } else {

                $datos = array('aviso' => 'Super administrador', 'alert' => 'success');
                $this->vista("usuario/consultas/consultarUsuario", $datos);

            }

        } else {

            $this->vista("usuario/consultas/consultarUsuario");
        }

    } #fin del metodo

    public function editarUsuario($id = 0)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $datos = array('ndocumento' => strip_tags($_POST["ndocumento"]), 'tdocumento' => strip_tags($_POST["tdocumento"]), 'rol' => strip_tags($_POST["rol"]), 'estado' => strip_tags($_POST["estado"]), 'id' => strip_tags($_POST["id"]));

            if ($_SESSION["docPerfil"] != $_POST["ndocumento"] && $_SESSION["rol"] == "1" && $_POST["rol"] != "1") {

                $respuesta = $this->usuarioModelo->editarUsuarioModel($datos);

                if ($respuesta) {
                    $datos             = $this->usuarioModelo->consultarUsuarioModel($datos["id"]);
                    $_SESSION["exito"] = 1;
                    $this->vista("usuario/consultas/consultarUsuario", $datos);

                } else {
                    echo 'no se realizo la actualizacion';
                }

            } else {

                if ($_SESSION["docPerfil"] == SUPER_ADMINISTRADOR) {

                    $respuesta = $this->usuarioModelo->editarUsuarioModel($datos);
                    if ($respuesta) {
                        $datos = $this->usuarioModelo->consultarUsuarioModel($datos["id"]);
                        $this->vista("usuario/consultas/consultarUsuario", $datos);

                    } else {
                        echo 'no se realizo la actualizacion';
                    }
                } else {
                    $respuesta = $this->usuarioModelo->consultarUsuarioModel($id);
                    $datos     = array('aviso' => 'No tienes permisos de Super administrador', 'ed' => $respuesta);
                    $this->vista("usuario/editar/editarUsuario", $datos);

                }

            }

        } else {

            $respuesta = $this->usuarioModelo->consultarUsuarioModel($id);
            $datos     = array('ed' => $respuesta);
            $this->vista("usuario/editar/editarUsuario", $datos);

        }

    } #fin del metodo

    #Traer los datos del usuario activo
    public function consultarPerfil()
    {

        $usuario   = $_SESSION["docPerfil"];
        $respuesta = $this->usuarioModelo->consultarUsuarioModel($usuario);

        if ($respuesta->documento_usuario == $_SESSION["docPerfil"]) {
            $datos = array('ed' => $respuesta);
            $this->vista("usuario/consultas/consultarPerfil", $datos);
        }
    } #fin del metodo

    #metodo para actualizar los datos del perfil
    public function editarPerfil()
    {
        #Consultamos los datos del usuairo para imprimirlos en las vistas que llamamos acontinuación
        $datosUsuario = $this->usuarioModelo->consultarUsuarioModel($_SESSION["docPerfil"]);

        #Si la varialble post pass tiene contenido
        if (isset($_POST["pass"])) {
            #encriptamos la contraseña que viene en la variable pass
            $encriptar = crypt(strip_tags($_POST["pass"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            #Si es igual a la contraseña actual del usuario llamamos la vista donde podremos editar datos
            if ($encriptar == $datosUsuario->contrasena) {

                $datos = array('ed' => $datosUsuario);
                $this->vista("usuario/editar/editarPerfil", $datos);
                #si la contraseña no conincide con la de la base de datos entonces retornamos un mensaje a la vista
            } else {

                $datos = array('aviso' => 'Confirmacion de contraseña incorrecta', 'alert' => 'danger', 'ed' => $datosUsuario);
                $this->vista("usuario/consultas/consultarPerfil", $datos);

            }
            #Si la variable pass no tiene contenido entonces tenemos mas condiciones como:
        } else {
            #Si la variable nombre1 tiene contenido
            if (isset($_POST["nombre1"])) {
                #hacemos el arreglo con los datos que vienen
                $datos = array('nombre1' => strip_tags($_POST["nombre1"]), 'nombre2' => strip_tags($_POST["nombre2"]), 'apellido1' => strip_tags($_POST["apellido1"]), 'apellido2' => strip_tags($_POST["apellido2"]), 'correo' => strip_tags($_POST["correo"]),
                    'id'                     => strip_tags($_POST['id']));
                #Llamamos al metodo editarPerfilModel y si es verdadero retornamos un mensaje a la vista con los datos del usuario
                if ($editar = $this->usuarioModelo->editarPerfilModel($datos)) {
                    $datosUsuario = $this->usuarioModelo->consultarUsuarioModel($_SESSION["docPerfil"]);
                    $datos        = array('aviso' => 'los cambios se realizaron exitosamente', 'alert' => 'success', 'ed' => $datosUsuario);
                    $this->vista("usuario/consultas/consultarPerfil", $datos);
                    #Si el modelo retorna falso por alguna razón retornamos un mensaje para indicar que algo salio mal
                } else {

                    $datos = array('aviso' => 'Algo salio mal no se pudo actualizar la informacion', 'alert' => 'danger', 'ed' => $datosUsuario);
                    $this->vista("usuario/editar/editarPerfil", $datos);
                }
                #Si la variable Contrasena tiene contenido entonces encriptamos la variable
            } else if (isset($_POST["contrasena"])) {

                $encriptar = crypt(strip_tags($_POST["contrasena"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                #si la variable es igual a la que esta en la base de datos
                if ($encriptar == $datosUsuario->contrasena) {
                    #confirmamos si las contraseñas 1 y 2 son iguales
                    if ($_POST["contrasena1"] == $_POST["contrasena2"]) {
                        #si son iguales encriptamos la que vamos a enviar al modelo y hacemos el arreglo
                        $encriptar1 = crypt(strip_tags($_POST["contrasena1"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                        $datos      = array('password' => $encriptar1, 'documento' => $_SESSION["docPerfil"]);
                        #Llamamos el metodo editarPasswordModel y si es verdadero lo que retorna enviamos un avido de exito a la vista
                        if ($editar = $this->usuarioModelo->editarPasswordModel($datos)) {
                            $datos = array('aviso' => 'La contraseña se Actualizo Exitosamente', 'alert' => 'success', 'ed' => $datosUsuario);
                            $this->vista("usuario/editar/editarPerfil", $datos);
                            #Si la Llamada del metodo retorna faso eviamos un mensaje haciendo saver que algo salio mal
                        } else {
                            $datos = array('aviso' => 'No se pudo actualizar la Contraseña Algo Salio mal', 'alert' => 'danger', 'ed' => $datosUsuario);
                            $this->vista("usuario/editar/editarPerfil", $datos);

                        }
                        #Si las contraseñas no coinciden enviamos un mensaje a la vista haciendole saver al usuario
                    } else {
                        $datos = array('aviso' => 'La Confirmación de la contraseña no coincide', 'alert' => 'danger', 'ed' => $datosUsuario);
                        $this->vista("usuario/editar/editarPerfil", $datos);

                    }
                    #Si las contraseñas actual no coincide enviamos un mensaje a la vista haciendole saver al usuario
                } else {
                    $datos = array('aviso' => 'La contraseña Actual es Incorrecta', 'alert' => 'danger', 'ed' => $datosUsuario);
                    $this->vista("usuario/editar/editarPerfil", $datos);
                }
                #Si no viene nada por POST imprimimos los datos que se pueden editar
            } else {
                $datos = array('ed' => $datosUsuario);
                $this->vista("usuario/editar/editarPerfil", $datos);
            }

        } #fin del else padre

    } #fin del metodo

} #fin de la clase
