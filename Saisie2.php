<?php
/*$personne=array($nom,$prenom)

if (isset($_POST['saisie[prenom]'])&& !empty($_POST['saisie[prenom]'])) {
    foreach($_POST as $index=>$valeur){
        echo $index;
    }
}
/*elseif (isset($_POST['nom2'])&& !empty($_POST)) {
    echo $_POST['nom2'];
}*/
// if (isset($_POST['nom'])&& !empty($_POST)) {
    /*foreach($_POST as $index=>$valeur){*/
        // echo $_POST['nom'];
    /*}*/
// }
// else {
//     echo "Nom inconnu";
// } 

//--- Début Exercice
//Affichage Nom vérifié
$nom=trim($_POST['nom']);
if ($nom=='') {
    echo "Aucune données saisies";
}
elseif (strlen($nom)>19) {
    echo "Votre nom est trop long <br>";
}
else {
    echo "nom= ".$nom."<br>";
}

    
// if (isset($_POST['nom'])&& !empty($_POST['nom'])) {
//     $nom=trim($_POST['nom']);
//     echo "nom= ".$nom;
// } else {
//     echo "Nom inconnu";
// }
// echo "<br>";
//Affichage mot de passe

// if (isset($_POST['mot_de_passe'])&& !empty($_POST['mot_de_passe'])) {
//     echo "mdp= ".$_POST['mot_de_passe'];
// } else {
//     echo "Mdp inconnu";
// }
// echo "<br>";
//Affichage mot de passe vérifié
$mot_de_passe=trim($_POST['mot_de_passe']);
$motif='/^[a-z][a-z0-9_#*$]{3,}/i';
if (preg_match($motif,$mot_de_passe)==0) {
    echo "votre code n'est pas assez fort.";
}
else {
    echo "mdp= ".$_POST['mot_de_passe'];
}
echo "<br>";
//Affichage sexe
if (isset($_POST['sexe'])&& !empty($_POST['sexe'])) {
    echo "mdp= ".$_POST['sexe'];
} else {
    echo "sexe inconnu";
}
echo "<br>";
//Affichage fichier
if (isset($_POST['photo'])&& !empty($_POST['photo'])) {
    echo "photo= ".$_POST['photo'];
} else {
    echo "photo introuvable";
}
echo "<br>";
//Affichage couleurs
function couleurCafe(){
  foreach ($_POST['couleurs'] as $key => $value) {
        echo $key." = ".$value." ";
    }  
};
if (isset($_POST['couleurs'])&& !empty($_POST['couleurs'])) { 
    echo "couleurs: ";
    echo "<br>";
    couleurCafe();   
} 
else {
    echo "couleur non selectionnée";
}
echo "<br>";
//Affichage langues
if (isset($_POST['langue'])&& !empty($_POST['langue'])) { 
    echo "langue= ".$_POST['langue'];   
} 
else {
    echo "couleur non selectionnée";
}
echo "<br>";
//Affichage fruits
function fruitPref(){
    foreach ($_POST['fruits'] as $key => $value) {
          echo $key." = ".$value." ";
      }  
  };
if (isset($_POST['fruits'])&& !empty($_POST['fruits'])) { 
      echo "fruits: ";
      echo "<br>";
      fruitPref();   
  } 
else {
      echo "aucun fruit selectionné";
  }
  echo "<br>";
// Affichage commentaire
if (isset($_POST['commentaire'])&& !empty($_POST['commentaire'])) { 
    echo "commentaire= ".$_POST['commentaire'];   
} 
else {
    echo "commentaire vide";
}
echo "<br>";
// Affichage invisible
if (isset($_POST['invisible'])&& !empty($_POST['invisible'])) { 
    echo "invisible= ".$_POST['invisible'];   
} 
else {
    echo "invisible vide";
}
echo "<br>";
//Affichage soumettre (bouton OK)
if (isset($_POST['soumettre'])&& !empty($_POST['soumettre'])) { 
    echo "soumettre= ".$_POST['soumettre'];   
} 
else {
    echo "vous n'avez pas appuyez sur OK";
}
echo "<br>";
//Affichage fruits
// function fruitPrefdeux(){
//     foreach ($_POST['saisie'] as $key => $value) {
//           echo $key." = ".$value." ";
//           fruitPref(); 
//       }  
//   };

// if (isset($_POST['fruits'])&& !empty($_POST['fruits'])) { 
//       echo "fruits: ";
//       echo "<br>";
//       fruitPrefdeux();   
//   } 
// else {
//       echo "aucun fruit selectionné";
//   }
//   echo "<br>";