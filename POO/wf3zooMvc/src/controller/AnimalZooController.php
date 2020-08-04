<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AnimalZooController extends AbstractController{
    public static function index(){
     

        echo self::getTwig()->render('animalZoo/index.html');
    }

    public static function show($id){
        echo "voici la page qui affiche l'article # ". $id;
    }

    public static function create(){
        echo "voici le Formulaire de création d'articles qui envoie en POST";
    }
    public static function new(){
        echo "voici la page qui Créée un article grâce aux données $_POST ";
    }
    public static function edit($id){
        echo "voici la page de Formulaire d'édition d'articles qui envoie en POST ";
    }
    public static function update(){
        echo "voici la page qui Édite un article grâce aux données $_POST";
    }
    public static function  delete($id){
        echo "voici la page qui Supprime un article reçu par $_POST";
    }

    

}
//https://github.com/tomsihap/allcourses/blob/master/POO/03-mvc.md


?>