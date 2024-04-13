<?php
namespace Controllers;
use MVC\Router;

class FirmaController {
    public static function index(Router $router) {
        $router->render('firma/index', [

        ]);
    }
}