<?php
    //exercice pour dédramatiser les tableaux
    // premier niveau faire ce tableau
    $arr = [
          "coucou72",
          "vie_oiseau",
          "test_value50",
          "bonjour",
          "arbitraire",
    ];
    //second  niveau faire ce tableau
    $arr1 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => 25,
        "bonjour" => 20,
        "arbitraire" => 5,
    ];
    //troisème  niveau faire ce tableau
    $arr2 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => [
            "in_tab" => "in tab",
            "in_tab1" => "dans tableau 1",
        ],
        "bonjour" => 20,
        "arbitraire" => 5,
    ];
    //afficher les valeurs comme l'exemple suivant :
    //la valeur coucou72 (ou) valeur de la clé est égale à 10
    //la valeur vie_oiseau (ou) valeur de la clé est égale à 15 ....
    $rtl = '<br>'; // ou “\n” pour l'exécution en ligne de commande
    // parcourir le premier tableau $arr avec for, foreach et while
    echo '=> Exercice avec premier tableau $arr'.$rtl.$rtl;

    echo '-> Avec for '.$rtl;

    // Afficher avec la boucle for  premier niveau :
          for ($numero = 0; $numero < 5; $numero++)
           {
            echo 'la ligne n°  ' .$numero. ' vaut '. $arr[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
            }
    // Afficher avec la boucle for  second  niveau :


          echo "".$rtl;
    echo '-> Avec foreach '.$rtl;
    // Afficher avec la boucle foreach :
    echo " tableau 1 ".$rtl;

        foreach($arr as $cle => $element)
        {
        echo '[' . $cle . '] vaut ' . $element . '<br />';
        }

        echo "".$rtl;
    //afficher le tableau 2
    echo " tableau 2".$rtl;
    foreach($arr1 as $cle => $element)
    {
    echo '[ ' . $cle . ' ] vaut ' . $element . '<br />';
    }
        echo "".$rtl;
     //afficher le tableau 3


    echo " tableau 3".$rtl; 
    
 
    foreach($arr2 as $cle => $element)
   // echo '[ ' . $cle.  ' ] vaut ' . $element . '<br />';
   { 
    if($cle!='test_value50'){
    echo '[ ' . $cle."".  ' ] vaut ' . $element . '<br />';}
   
if($cle=='test_value50')
foreach($element as $element1 => $value2){
    echo '[ ' . $element1.  ' ] vaut ' . $value2 . '<br />';}

}



    echo '-> Avec while '.$rtl;
    //afficher le tableau 1
    echo " tableau 1".$rtl;
    $numero=0;
    while ($numero <=4) {
        echo'la ligne n° '.$numero.' vaut '.$arr[$numero].'<br>';
        $numero++;
    }
    echo "".$rtl;
    

    echo $rtl.'-------------'.$rtl;
    // parcourir le deuxième et troisième tableau avec foreach
    echo 'Exercice avec le deuxième et le troisème tableau '.$rtl.$rtl;
    echo '-> Avec le tableau $arr1'.$rtl;
    // réponse ici
    echo $rtl.'-> Avec le tableau $arr2'.$rtl;
    // réponse ici
?>
