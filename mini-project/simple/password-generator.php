<?php

$all_symbol = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0","1","2","3","4","5","6","7","8","9","!","@","#","$","%","^","&","*","(",")"];
echo ("Укажите длинну пароля: ");
$pass_length = trim(fgets(STDIN));
$password = [];
//
$random_index;

for ($i = 0; $i < $pass_length; $i++) {
    $random_index = rand(0, 70);

    $random_symbol = $all_symbol[$random_index];
    $password[] = $random_symbol;
    //
    echo($random_index." | ");
}
echo("\n");
echo implode('', $password);

// Написал за 51 минуту... Прочитать можно, да и код в целом понятный.
// 100% что можно укоротить но оставлю как есть. Это вот мои возможности сейчас.
// функций надо учить блееее.

?>