<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 08/11/2018
 * Time: 09:59
 */
function compare($x,$y){
    if ($x===$y){echo "x et y sont égaux";}
    else if($x>$y) {echo "x est plus grand que y";}
    else {echo "y est plus grand que x";}
}
$x=rand(0,5);
echo "x = ".$x."<br>";
$y=rand(0,5);
echo "y = ".$y."<br>";
compare($x,$y);

function calc_sinus($valeur,$unite="radians") {
    if ($unite === "degrés") {
        $val_rd=$valeur * pi() / 180;
        return sin($val_rd);
    }
    elseif ($unite==="grades") {
        $val_rd= $valeur * pi() /200;
        return sin($val_rd);
    }
    else return sin($valeur);

}

$valeurs = [1,2,3,4,5,pi(),pi()/2] ;
$unites =["degrés","radians","grades","hello"];
$valeur= $valeurs[rand(0,6)];
$unite= $unites[rand(0,3)];
echo "<br> valeur = ".$valeur."<br> unité = ".$unite."<br> sinus ".$valeur." = ".calc_sinus($valeur,$unite);
?>


