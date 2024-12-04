<?php
class UsuarioModelo
{
    private $id;
    private $password;
    private $nombre;
    private $apellidos;
    private $rol;
    private $email;
    private $telefono;
    private $estado;
    private $fecha_registro;

    public function __construct(String $id, String $password, String $nombre, String $apellidos)
    {
        if (empty($id) || empty($nombre) || empty($apellidos) || empty($email)) {
            throw new \Exception('El campo no puede estar vacío');
        }

        $validation = $this->validatePassword($passWord);
        if ($validation['estado'] === false) {
            throw new \Exception($validation['error']);
        }
        $this->id = $id;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;       
    }
    private function ValidarPassword(String $password): array
    {
        if(empty($password))
        {
            $message = 'La contraseña no puede estar vacía<br>';
            return ['error' => $message, 'status' => false];
        }
        if (strlen($password) <= 11)
        {
            $message = 'La contraseña debe tener al menos 11 caracteres<br>';
            return ['error' => $message, 'estado' => false];
        }
        return ['error' => 'OK', 'estado' => true];
        
    }
    public function getId(): String
    {
        return $this->id;
    }
    public function getPassword(): String
    {
        return $this->password;
    }
    public function getNombre(): String
    {
        return $this->nombre;
    }
    public function getApellidos(): String
    {
        return $this->apellidos;
    }
    public function getRol(): String
    {
        return $this->rol;
    }
    public function getEmail(): String
    {
        return $this->email;
    }    
    public function getTelefono(): String
    {
        return $this->telefono;
    }
    public function getEstado(): String
    {
        return $this->estado;
    }
    public function getFechaRegistro(): String
    {
        return $this->fecha_registro;
    }
    public function setEmail(String $email): void
    {
        $this->email = $email;
    }
    public function setTelefono(String $telefono): void
    {
        $this->telefono = $telefono;
    }
    public function setEstado(String $estado): void
    {
        $this->estado = $estado;
    }
    public function setFechaRegistro(String $fecha_registro): void
    {
        $this->fecha_registro = $fecha_registro;
    }
  

}
