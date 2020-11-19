<?php

require_once 'models/categoria.php';
require_once 'models/producto.php';

class CategoriaController{
    
    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        
        require_once 'views/categoria/index.php';
    }
    
    public function ver(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            //conseguir categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
            
            //conseguir productos
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory();
            
        }
        
        require_once 'views/categoria/ver.php';
    }
    
    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }
    
    public function save(){
        Utils::isAdmin();
        
        //Guardar la categoria en BD
        if(isset($_POST) && isset($_POST['nombre'])){
            //Instancio modelo Categoria
            $categoria = new Categoria();
            //asigno varlor al atributo nombre del modelo
            $categoria->setNombre($_POST['nombre']);
            //ejecuto el método save del modelo con el nuevo valor del atributo Nombre
            $save = $categoria->save();
        }
        //al guardar se redireccionará a la vista con la lista de categorías
        header('location:'.base_url.'categoria/index');
        
    }
    
}
