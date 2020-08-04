<?php

namespace App\Controller;

use App\Model\Animal;

class AnimalController extends AbstractController
{

    public static function index()
    {
        $animaux = Animal::findAll();
       // var_dump($animaux);
       echo self::getTwig()->render('animal/index.html', [
           'animaux' => $animaux
       ]);
    }

    public static function show($id)
    {
        $animal = Animal::find($id);
        echo self::getTwig()->render('animal/show.html', [
            'animal' => $animal
        ]);
        //var_dump($animal);
    }

    public static function create()
    {
        //echo "voici le Formulaire de création d'articles qui envoie en POST";
        echo self::getTwig()->render('animal/create.html');
    }

    public static function new()
    {
        Animal::createNewAnimal();
        self::index();

        //var_dump($_POST);
    }
    public static function edit($id)
    {
        $animal = Animal::find($id);
        echo self::getTwig()->render('animal/edit.html', [
            'animal' => $animal
        ]);
    }
    public static function update($id)
    {
        Animal::update($id);
        self::index();
    }
    public static function  delete($id)
    {
        Animal::delete($id);
        self::index();
    }

}
//https://github.com/tomsihap/allcourses/blob/master/POO/03-mvc.md
