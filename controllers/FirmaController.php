<?php
namespace Controllers;
use MVC\Router;

class FirmaController {
    public static function index(Router $router) {
        session_start();
        $router->render('firma/index', [  
            'nombre' => $_SESSION['nombre']       
        ]);   
    }

    public static function subir(Router $router) {
        //var_dump($_FILES['file']);
        
            $directorio = "../uploads/";
            $permitidos = array('docx', 'doc', 'pdf');
            $archivo = $directorio . $_FILES['file']['name'];
            $arregloArchivo = explode(".", $_FILES['file']['name']);
            $extencio = strtolower(end($arregloArchivo));

            if (in_array($extencio, $permitidos)) {
                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777);
                }

                if (move_uploaded_file($_FILES['file']['tmp_name'], $archivo)) {
                    echo 'Documento cargado correctamente';
                }else {
                    echo 'Error al cargar documento';
                }
            } else {
                echo "Archivo no permitido";
            }
            
            $router->render('firma/index', [  
            'nombre' => $_SESSION['nombre']       
        
            ]);
    }
    }

