<?php

namespace App\Controller;

use App\Model\Conducteur;

class ConducteurController extends AbstractController
{

    public static function index()
    {
        $conducteurs = Conducteur::findAll();
        // var_dump($conducteurs);
        echo self::getTwig()->render('conducteur/index.html', [
            'conducteurs' => $conducteurs
        ]);
     
    }

    public static function show($id)
    {
        $conducteur = Conducteur::find($id);
        echo self::getTwig()->render('conducteur/show.html', [
            'conducteur' => $conducteur
        ]);
        //var_dump($conducteur);
    }

    public static function create()
    {
        //echo "voici le Formulaire de création  qui envoie en POST";
        echo self::getTwig()->render('conducteur/create.html');
    }

    public static function new()
    {
        Conducteur::createNewConducteur();
        self::index();

        //var_dump($_POST);
    }
    public static function edit($id)
    {
        $conducteur = Conducteur::find($id);
        echo self::getTwig()->render('conducteur/edit.html', [
            'conducteur' => $conducteur
        ]);
    }
    public static function update($id)
    {
        Conducteur::update($id);
        self::index();
    }
    public static function  delete($id)
    {
        Conducteur::delete($id);
        self::index();
    }
}
