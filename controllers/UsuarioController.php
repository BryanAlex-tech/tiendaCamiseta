<?php

require_once 'models/usuario.php';

class UsuarioController{
    
    public function index(){
        echo 'hola hola';
    }
    
    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            if($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();

                if ($save) {
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            }else{
                $_SESSION['register'] = 'failed';
            }
        }else{
            $_SESSION['register'] = 'failed';
        }
        header('location:'.base_url.'usuario/registro');
    }
    
    public function login(){
        if(isset($_POST)){
            //instancio la clase Usuario del modelo
            $usuario = new Usuario();
            //asigno los valores de las variables de mi modelo
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            
            //ejecuto el método Login del modelo y guardo el return en identity
            $identity = $usuario->login();
            
        if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                
                //si el rol es admin, crea una variable de sesión con el valor true
                if($identity->rol== 'admin' ){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = 'Identificación Fallida';
            }
            //Crear una sesión
        }
    header('location:'.base_url);
    }
    
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        
        header('Location:'.base_url);
    }

}