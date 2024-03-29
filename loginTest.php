<?php
// Désactiver l'affichage des warnings
error_reporting(E_ERROR | E_PARSE);

session_start();

include "config/commandes.php";

if(isset($_SESSION['test'])){
    if(!empty($_SESSION['test'])){
        header("Location: admin/");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
    
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #e87c44;
            transition: .5s;
            font-family: 'Hammersmith One', sans-serif;

        }
        body.active{
            background: #b0548c;
        }
        .container{
            position: relative;
            width: 800px;
            height: 500px;
            margin: 20px;
        }
        .orangeBG{
            position:absolute;
            top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 420px;
            background: rgba(255, 255, 255, .2);
            box-shadow: 0 5px 45px rgba(0, 0, 0, .15);
        }
        .orangeBG .box{
            position: relative;
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .form-box{
            position: absolute;
            background: #fff;
            height: 100%;
            width: 50%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 45px rgba(0,0,0,0.25);
            transition: ease-in-out .5s;
            overflow: hidden;
        }
        .form-box.active{
            left: 50%;
        }
        .box h2{
            color: white;
            font-size: 1.2em;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .orangeBG .box button{
            padding: 10px 20px;
            background: white;
            color: black;
            font-size: 16px;
            font-weight: 500;
            border: none;
            cursor: pointer;
        }
        .form-box .form{
            position: absolute;
            width: 80%;
            transform: .5s;
            padding: 50px;
        }
        .form-box .signinform{
            transition-delay: .25s;
        }
        .form-box.active .signinform{
            left: -100%;
            transition-delay: 0;
        }
        .form-box .signupform{
            left: 100%;
            transition-delay: 0;
        }
        .form-box.active .signupform{
            left: 0%;
            transition-delay: .25s;

        }
        .form-box .form form{
            display: flex;
            width: 100%;
            flex-direction: column;
        }
        .form form input{
            margin-bottom: 20px;
            padding: 10px;
            outline: none;
            border: 1px solid #333;
        }
        .form form h3{
            text-align: center;
            font-size: 1.5em;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .form form input[type="submit"]{
            background: orange;
            border: none;
            max-width: 100px;
            color: white;
            cursor: pointer;
        }
        .form form input[value="Sign Up"]{
            background: #b0548c;
            border: none;
            max-width: 100px;
            color: white;
            cursor: pointer;
        }
        a img:hover {
    transform: scale(1.1); /* L'image sera agrandie de 10% lors du survol */
}
    </style>
</head>



<body>
    <a href="pageaccueil.php" style="text-decoration: none; padding: 5px; border-radius: 5px; background-color: white; display: inline-block; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <img src="./img/logo.png" width="120" height="120" style="transition: transform 0.2s; display: block; margin: auto;">
    </a>
    
          <div class="container">
        <div class="orangeBG">
            <div class="box signin">
                <h2 class="special-font">Vous avez déja un compte ?</h2>
                <button class="buttonsignin" >Se connecter</button>
            </div>
            <div class="box signup">
                <h2 class="special-font">Vous n'avez pas de compte ?</h2>
                <button class="buttonsignup">Creer un compte</button>
            </div>
        </div>
        <div class="form-box">
            <div class="form signinform">
                <form method="post">
                    <h3>Se connecter</h3>
                    <label for="Nom" class="form-label">Nom</label>
                    <input class="form-control" name ="Nom">
                    <label for="Mdp" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name ="Mdp">
                    <input type="submit" name="envoyer" value="se connecter">
                </form>
            </div>
            <div class="form signupform">
                <form method="post">
                    <h3>Creer un compte</h3>
                    <input type="text" placeholder="Nom">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Mot de passe">
                    <input type="password" placeholder="Confirmer le mot de passe">
                    <input type="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
    <script src="index.js"></script>

</body>
</html>



<?php
if(isset($_POST['envoyer'])){
    if(!empty($_POST['Nom']) && !empty($_POST['Mdp'])){
        $Nom = htmlspecialchars($_POST['Nom']);
        $Mdp = htmlspecialchars($_POST['Mdp']);

        $user = getUtilisateur($Nom, $Mdp);

        if($user){
            $_SESSION['test'] = $user;
            header("Location: vinyles.php");
            exit();
        }
    }
}
?> 