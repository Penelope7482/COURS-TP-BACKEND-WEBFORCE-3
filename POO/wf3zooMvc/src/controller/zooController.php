<?php

namespace App\Controller;

use App\Model\Zoo;

class zooController extends AbstractController
{
    public static function index()
    {
        $zoos = Zoo::findAll();

        // var_dump($zoos);
        echo self::getTwig()->render('zoo/index.html', [
            'zoos' => $zoos
        ]);
    }

    public static function show($id)
    {
        $zoo = Zoo::find($id);
        echo self::getTwig()->render('zoo/show.html', [
            'zoo' => $zoo
        ]);
        //  echo self::getTwig()->render('zoo/show.html', [
        //      'idzoo' => $id,
        //      'name' =>$name,
        //      'city'=> $city,
        //      
        //  ]);
    }


/**
 * Affiche le formulaire de création de zoo
 */
    public static function create()
    {
        echo self::getTwig()->render('zoo/create.html');
    }
/**
 * Affiche le nouveau zoo créé sur la page zoo/index
 *
 * @return void
 */
    public static function new()
    {
        Zoo::createNewZoo();
        self::index();
        //var_dump($_POST);
    }

/**
 * Affiche la page de formulaire d'édition d'articles qui envoie en POST
 */
    public static function edit($id)
    {
        $zoo = Zoo::find($id);
        echo self::getTwig()->render('zoo/edit.html', [
            'zoo' => $zoo
        ]);
    }

    
    public static function update($id)
    {
        Zoo::update($id);
        self::index();
    }
    public static function  delete($id)
    {
        Zoo::delete($id);
        self::index();
    }
}
//https://github.com/tomsihap/allcourses/blob/master/POO/03-mvc.md
