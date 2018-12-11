<?php

class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Base();
    }

    #registrar usuario
    public function registrarUsuarioModel($datos)
    {

        $this->db->query("INSERT INTO usuario (documento_usuario, tipo_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, contrasena, correo, rol, estado) VALUES (:ndocumento, :tdocumento, :primer_nombre, :segundo_nombre,:primer_apellido, :segundo_apellido,:contra, :correo, :rol, :estado)");

        #vincular valores
        $this->db->bind(":ndocumento", $datos["ndocumento"]);
        $this->db->bind(":tdocumento", $datos["tdocumento"]);
        $this->db->bind(":primer_nombre", $datos["primer_nombre"]);
        $this->db->bind(":segundo_nombre", $datos["segundo_nombre"]);
        $this->db->bind(":primer_apellido", $datos["primer_apellido"]);
        $this->db->bind(":segundo_apellido", $datos["segundo_apellido"]);
        $this->db->bind(":contra", $datos["contra"]);
        $this->db->bind(":correo", $datos["correo"]);
        $this->db->bind(":rol", $datos["rol"]);
        $this->db->bind(":estado", $datos["estado"]);

        #ejecutar la consulta

        if ($this->db->execute()) {
            return true;
        } else {

            return false;
        }

    }

    #Completar registro de usuario
    public function completarRegistroModel($datos)
    {
        $this->db->query(" UPDATE  usuario  SET  contrasena  = :contra,  correo  = :correo,  rol  = :rol,  estado  = :estado WHERE  usuario . documento_usuario  = :ndocumento");
        #vincular valores
        $this->db->bind(":ndocumento", $datos["ndocumento"]);        
        $this->db->bind(":contra", $datos["contra"]);
        $this->db->bind(":correo", $datos["correo"]);
        $this->db->bind(":rol", $datos["rol"]);
        $this->db->bind(":estado", $datos["estado"]);

        if ($this->db->execute()) {
            return true;
        } else {

            return false;
        }

    }

    #Validar si un suario ya se encuentra registrado con el Documento o Coreo
    public function ValidarUsuarioModel($datos)
    {

        $this->db->query("SELECT * FROM  usuario WHERE documento_usuario = :ndocumento OR correo = :correo");

        $this->db->bind(":ndocumento", $datos["ndocumento"]);
        $this->db->bind(":correo", $datos["correo"]);
        $this->db->execute();
        return $this->db->registro();

    }

    public function restablecerModel($email)
    {

        $this->db->query("SELECT * FROM  usuario WHERE correo = :email");
        $this->db->bind(":email", $email);
        $this->db->execute();
        return $this->db->registro();

    }

    public function restablecerPasswordModel($cambiar, $correo)
    {

        $this->db->query("update usuario set contrasena = :cambio where correo = :correo");
        $this->db->bind(":cambio", $cambiar);
        $this->db->bind(":correo", $correo);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function loginModel($usuario)
    {

        $this->db->query("SELECT * FROM usuario INNER JOIN rol ON usuario.rol=rol.id_rol WHERE documento_usuario = :usuario");
        $this->db->bind(":usuario", $usuario);
        $this->db->execute();
        return $this->db->registro();
    } #fin del metodo

    public function consultarUsuariosModel()
    {

        $this->db->query("SELECT * FROM usuario INNER JOIN tipo_documento on usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN rol ON usuario.rol=rol.id_rol INNER JOIN estado ON usuario.estado=estado.id_estado");

        $this->db->execute();
        return $this->db->registros();

    } #fin del metodo
    public function consultarUsuarioModel($documento)
    {

        $this->db->query("SELECT * FROM usuario INNER JOIN tipo_documento on usuario.tipo_documento=tipo_documento.id_tipo INNER JOIN rol ON usuario.rol=rol.id_rol INNER JOIN estado ON usuario.estado=estado.id_estado WHERE documento_usuario = :doc");

        $this->db->bind(":doc", $documento);
        $this->db->execute();
        return $this->db->registro();

    } #fin del metodo

    public function editarUsuarioModel($datos)
    {

        $this->db->query("UPDATE usuario SET  tipo_documento = :tdocumento, rol = :rol, estado = :estado WHERE usuario.documento_usuario = :id");

        $this->db->bind(":tdocumento", $datos["tdocumento"]);
        $this->db->bind(":rol", $datos["rol"]);
        $this->db->bind(":estado", $datos["estado"]);
        $this->db->bind(":id", $datos["id"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    } #fin del metodo

    public function editarPerfilModel($datos)
    {

        $this->db->query("UPDATE usuario SET primer_nombre = :nombre1, segundo_nombre = :nombre2, primer_apellido = :apellido1,  segundo_apellido = :apellido2, correo = :correo WHERE usuario.documento_usuario = :id");

        $this->db->bind(":nombre1", $datos["nombre1"]);
        $this->db->bind(":nombre2", $datos["nombre2"]);
        $this->db->bind(":apellido1", $datos["apellido1"]);
        $this->db->bind(":apellido2", $datos["apellido2"]);
        $this->db->bind(":correo", $datos["correo"]);
        $this->db->bind(":id", $datos["id"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    } #fin del metodo

    public function editarPasswordModel($datos)
    {

        $this->db->query("UPDATE usuario SET contrasena = :contra WHERE documento_usuario = :id");

        $this->db->bind(":contra", $datos["password"]);
        $this->db->bind(":id", $datos["documento"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } #fin del metodo

} #fin de la Clase
