<?php
echo'<h1>hello world</h1>';
echo'<p>we are the world</p>'.'<br>';
$name = 'cino'.'<br>';
echo $name;

$chaine = "ceci est une chaine de caractere";
// echo $chaine . '<br>';
//afficher un caractere de la chaine
// echo $chaine[3].'<br>';
//modifier un caractere de la chaine
// $chaine[0]="F".'<br>';
// echo $chaine.'<br>';
// var_dump($chaine).'<br>';
// echo substr($chaine,0,4) .'br>';
// echo substr($chaine,-10) .'br>'
//remplacer une partie de la chaine du caractere
$chaine=str_replace('ceci','cela',$chaine).'br>';
//while loop
$nligne=0;
while($nligne<10){
    echo 'ceci est la ligne' . ' '. $nligne .'<br>';
    $nligne++;
}
//for loop
for($nline=0;$nline<50;$nline++){
    echo $nline . '<br>';
}
//
$annee = date("Y");
echo $annee .'<br>';
$hour= date("H");
echo $hour;
?>