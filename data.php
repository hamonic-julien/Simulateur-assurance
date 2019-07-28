<?php

$tarif = '0';
//Pour tester si les valeurs ont été saisies :
//empty() : attention, renvoi True si celle ci vaut 0 ou False. Donc accidents = 0 renvoi True et non 0 !
//isset() : permet de tester si une variable existe même si elle vaut 0 ou false
if (isset($_GET["age"]) && isset($_GET["year"]) && isset($_GET["accidents"]) && isset($_GET["assurer"])) {
    $age = intval($_GET["age"]);
    $year = intval($_GET["year"]);
    $accidents = intval($_GET["accidents"]);
    $assurer = intval($_GET["assurer"]);
    $palier = 1; //par défaut
    
    if($accidents > 0) {
        $palier = $palier - $accidents;
    };
    if($year > 2) {
        $palier++;
    };
    if($age > 25) {
        $palier++;
    };
    if($assurer > 5 && $palier > 0) {
        $palier++;
    };
    

    if($palier == 1) {
        $tarif = 'Rouge';
    }
    elseif ($palier == 2) {
        $tarif = 'Orange';
    }
    elseif ($palier == 3) {
        $tarif = 'Vert';
    }
    elseif ($palier >= 4) {
        $tarif = 'Bleu';
    }
    else {
        $tarif = "Refus d'assurer";
    }
};


    if($tarif == 'Rouge') {
        $message = 'Votre client à droit au tarif <strong class="red">' . $tarif . '</strong>';
    }
    elseif($tarif == 'Orange') {
        $message = 'Votre client à droit au tarif <strong class="orange">' . $tarif . '</strong>';
    }
    elseif($tarif == 'Vert') {
        $message = 'Votre client à droit au tarif <strong class="green">' . $tarif . '</strong>';
    }
    elseif($tarif == 'Bleu') {
        $message = 'Votre client à droit au tarif <strong class="blue">' . $tarif . '</strong>';
    }
    elseif($tarif == 'Refus d\'assurer') {
        $message = 'Votre client à droit au tarif <strong class="grey">' . $tarif . '</strong>';
    }
    else {
        $message = '';
    };

        
/*Avec switch 
$tarif = [
    0 => 'Refus d\'assurer',
    1 => 'Rouge',
    2 => 'Orange',
    3 => 'Vert',
    4 => 'Bleu',
];

switch($palier){
case 0:
echo 'Votre client ne peut être assuré';
break;
case 1:
echo 'Votre client à droit au tarif Rouge';
break;
case 2:
echo 'Votre client à droit au tarif Orange';
break;
case 3:
echo 'Votre client à droit au tarif Vert';
break;
case 4:
echo 'Votre client à droit au tarif Bleu';
}


*/

?>
