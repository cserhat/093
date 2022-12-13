<?php

namespace SYRADEV\AutoEncheres\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.
use SYRADEV\AutoEncheres\Utils\Database\PdoDb;

/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Annonces extends Controller
{

    /*
    * Affiche la liste des annonces.
    */
    public function list() {
        // Requete de type SELECT * sur la table annonces.
        $sql = 'SELECT * FROM `annonces` ORDER BY `date_fin_enchere`';
        // Exécution de la requête
        $annonces = PdoDb::getInstance()->requete($sql);
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default','templates.annonces', $annonces);
    }
}