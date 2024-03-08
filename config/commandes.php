<?php

// ajouter un utilisateur a la base de données
function ajouterUser($nom, $prenom, $email, $motdepasse)
{
  if(require("connection.php"))
  {
    $req = $access->prepare("INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse));

    return true;

    $req->closeCursor();
  }
}


function getUser($nom, $prenom, $email, $motdepasse){

    if(require("connection.php"))
    {
        $req = $access->prepare("SELECT * FROM utilisateur WHERE nom = ? AND prenom = ? AND email = ? AND motdepasse = ?");
        
        $req->execute(array($nom, $prenom, $email, $motdepasse));

        if($req->rowCount()==1)
        {
            $data = $req->fetch();

            return $data;

        } else {
            return false;
        }
        $req->closeCursor();
    }
}


// get l'admin lors de la connection
function getAdmin($email, $motdepasse){

    if(require("connection.php"))
    {
        $req = $access->prepare("SELECT * FROM admin WHERE email = ? AND motdepasse = ?");
        
        $req->execute(array($email, $motdepasse));

        if($req->rowCount()==1)
        {
            $data = $req->fetch();

            return $data;

        } else {
            return false;
        }
        $req->closeCursor();
    }
}





function ajouter($IDcd, $nomCD, $dateSortie, $imagePochette, $prix){
    if(require("connection.php")){
        $req = $access->prepare("INSERT INTO cd (IDcd, nomCD, dateSortie, imagePochette, prix) VALUES (?, ?, ?, ?, ?)");
        
        $req->execute(array($IDcd, $nomCD, $dateSortie, $imagePochette, $prix));

        $req->closeCursor();
    }
}

// On aurait pu juste faire une fonction ajouter pour les deux
function ajouterArtiste($id, $nom, $alias, $dateNaissance){
    if(require("connection.php")){
        $req = $access->prepare("INSERT INTO auteur (id, nom, alias, dateNaissance) VALUES (?, ?, ?, ?)");
        
        $req->execute(array($id, $nom, $alias, $dateNaissance));

        $req->closeCursor();
    }
}


function ajouterPanier($IDcdpanier, $nomCD, $dateSortie, $imagePochette, $prix){
    if(require("connection.php")){
        $req = $access->prepare("INSERT INTO panier (IDcdpanier, nomCD, dateSortie, imagePochette, prix) VALUES (?, ?, ?, ?, ?)");
        
        $req->execute(array($IDcdpanier, $nomCD, $dateSortie, $imagePochette, $prix));

        $req->closeCursor();
    }
}

// affichage des cds du panier
function afficherPanier(){
    $data = [];
    if(require("connection.php")){
        $req = $access->prepare("SELECT * FROM panier");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);


        $req->closeCursor();

    }
    return $data;
}

// supprimer le cd du panier
function supprimerPanier($IDcdpanier){
    if(require("connection.php")){
        $req = $access->prepare("DELETE FROM panier WHERE IDcdpanier = ?");


        $req->execute(array($IDcdpanier));
    }
}



// affichage des cds
function afficher(){
    $data = [];
    if(require("connection.php")){
        $req = $access->prepare("SELECT Vinyle.Nom AS nomVinyle, IMAGE.url, Artiste.Nom FROM Vinyle JOIN Illustrer ON Vinyle.IdVinyle = Illustrer.IdVinyle JOIN IMAGE ON Illustrer.IdImage = IMAGE.IdImage JOIN Artiste on Vinyle.IdArtiste = Artiste.IdArtiste");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);


        $req->closeCursor();

    }
    return $data;
}


// supprimer le cd
function supprimer($IDcd){
    if(require("connection.php")){
        // Pour l'instant problème de structure de bd, obligation de supprimer l'artiste en meme temps que le cd
        $req = $access->prepare("DELETE FROM auteur WHERE ID = ?;");
        $req2 = $access->prepare("DELETE FROM cd WHERE IDcd =? ;");

        $req->execute(array($IDcd));
        $req2->execute(array($IDcd));
    }
}

// vider le panier
function viderPanier(){
    if(require("connection.php")){
        $req = $access->prepare("DELETE FROM panier");

        $req->execute(array());
    }
}





// --------------- Fonctions page d'accueil --------------------


// affichage des vinyles
function carrouselVinyle(){
    $data = [];
    if(require("connection.php")){
        // Modifier la BD pour avoir les images liées aux vinyle dans Illustrer (insertions)
        $req = $access->prepare("SELECT V.IdVinyle, V.Nom AS VNom, A.Nom AS ANom  FROM Vinyle V JOIN Artiste A ON V.IdArtiste = A.IdArtiste ORDER BY Annee DESC LIMIT 6");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);


        $req->closeCursor();

    }
    return $data;
}


// affichage des artises
function carrouselArtiste(){
    $data = [];
    if(require("connection.php")){
        // Modifier la BD pour avoir les images liées aux vinyle dans Illustrer (insertions)
        $req = $access->prepare("SELECT IdArtiste, Nom FROM Artiste ORDER BY RAND () DESC LIMIT 6");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);


        $req->closeCursor();

    }
    return $data;
}


?>