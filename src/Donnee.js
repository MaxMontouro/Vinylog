/**
 * @file Donnee.js
 * @author MaxMontouro
 * @version 1.0
 * @date 2021-05-18
 */

//------------------------------------
//      INCLUSION FICHIERS
//------------------------------------

import { Lettre } from "./Lettre.js";


//------------------------------------
//      FONCTION GLOBAL
//------------------------------------

let dictionnaireJSON;

$(document).ready(function(){
    $("#bouton1").click(function(){
        $.ajax({
            url: "./config/commandes.php",
            type: "POST",
            data: { action: "rechercherBD" },
            dataType: "json",
            success: function(result){
                // 'result' contient le fichier JSON renvoyé par la fonction rechercherBd
                // Vous pouvez affecter ce fichier JSON à une variable
                dictionnaireJSON = result;

                // Faites quelque chose avec le fichier JSON ici
                console.log("Fichier JSON récupéré :", dictionnaireJSON);
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs ici
                console.error("Erreur lors de la récupération du fichier JSON :", error);
            }
        });
    });
});

export {dictionnaireJSON};
    
//------------------------------------
//      Classe Donnee
//------------------------------------

export class Donnee {

    /**
     * @brief constructeur de la classe Donnee qui ne peut pas être instancié car classe abstraite
     * @constructor
     */
    constructor() {
        if (new.target === Donnee) {
            throw new Error("On ne peut pas implémenté une classe abstraite");
        }
        // Initialisation commune à toutes les classes dérivées
    }
    //pas d'instanciation car classe abstraite 

    /**
     * @brief méthode qui permet de calculer la distance entre deux données
     * @brief cette méthode est abstraite
     */    
    damarauLevenshteinDistance(){
        throw new Error("La méthode 'damarauLevenshtein' doit être implémenté");
    };

    /**
     * @brief méthode qui permet de calculer la distance entre deux données
     * @brief cette méthode est abstraite
     */
    
    corrigerClavier(distanceErreur){
        throw new Error("La méthode 'corrigerClavier' doit être implémenté"); 
    };
}
