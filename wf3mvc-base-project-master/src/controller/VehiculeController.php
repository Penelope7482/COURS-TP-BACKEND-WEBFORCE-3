<?php

namespace App\Controller;

use App\Model\Vehicule;

class VehiculeController extends AbstractController
{

    public static function index()
    {
        $vehicules = Vehicule::findAll();
       //var_dump($vehicules);
       echo self::getTwig()->render('vehicule/index.html', [
           'vehicules' => $vehicules
       ]);
  
    }

    public static function show($id)
    {
        $vehicule = Vehicule::find($id);
        echo self::getTwig()->render('vehicule/show.html', [
            'vehicule' => $vehicule
        ]);
        //var_dump($vehicule);
    }

    public static function create()
    {
        //echo "voici le Formulaire de création d'articles qui envoie en POST";
        echo self::getTwig()->render('vehicule/create.html');
    }

    public static function new()
    {
        Vehicule::createNewVehicule();
        self::index();

        //var_dump($_POST);
    }
    public static function edit($id)
    {
        $vehicule = Vehicule::find($id);
        echo self::getTwig()->render('vehicule/edit.html', [
            'vehicule' => $vehicule
        ]);
    }
    public static function update($id)
    {
        Vehicule::update($id);
        self::index();
    }
    public static function  delete($id)
    {
        Vehicule::delete($id);
        self::index();
    }

}