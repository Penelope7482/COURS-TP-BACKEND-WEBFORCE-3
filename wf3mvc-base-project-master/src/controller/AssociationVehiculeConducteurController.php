<?php

namespace App\Controller;

use App\Model\AssociationVehiculeConducteur;
use App\Model\Conducteur;
use App\Model\Vehicule;

class AssociationVehiculeConducteurController extends AbstractController
{

    public static function index()
    {
        $associationVehiculeConducteurs = AssociationVehiculeConducteur::findAll();
        //var_dump($associationVehiculeConducteurs);
        echo self::getTwig()->render('associationVehiculeConducteur/index.html', [
            'associationVehiculeConducteurs' => $associationVehiculeConducteurs
        ]);   

    }

    public static function show($id)
    {
        $associationVehiculeConducteur = AssociationVehiculeConducteur::find($id);
        echo self::getTwig()->render('associationVehiculeConducteur/show.html', [
            'associationVehiculeConducteur' => $associationVehiculeConducteur
        ]);
        //var_dump($associationVehiculeConducteur);
    }

    public static function create()
    {
        //echo "voici le Formulaire de création  qui envoie en POST";
        echo self::getTwig()->render('associationVehiculeConducteur/create.html');
    }

    public static function new()
    {
        AssociationVehiculeConducteur::createNewAssociationVehiculeConducteur();
        self::index();

        //var_dump($_POST);
    }
    public static function edit($id)
    {
        $associationVehiculeConducteur = AssociationVehiculeConducteur::find($id);
        echo self::getTwig()->render('associationVehiculeConducteur/edit.html', [
            'associationVehiculeConducteur' => $associationVehiculeConducteur
        ]);
    }
    public static function update($id)
    {
        AssociationVehiculeConducteur::update($id);
        self::index();
    }
    public static function  delete($id)
    {
        AssociationVehiculeConducteur::delete($id);
        self::index();
    }
}
