<?php

echo ("Укажите слагаемое: ");
$a = (int)fgets(STDIN);
echo ("Укажите операцию: ");
$operation = trim(fgets(STDIN));
echo ("Второе слагаемое: ");
$b = (int)fgets(STDIN);

switch ($operation) {
    case "+":
        echo ("$a + $b = " . ($a + $b));
        break;
    case "-":
        echo ("$a - $b = " . ($a - $b));
        break;
    case "*":
        echo ("$a * $b = " . ($a * $b));
        break;
    case "/":
        if ($b == 0) {
            echo ("НОВАЯ Ачивка: Вы ОтКрыЛи БеСкОнЕчНосТЬ!");
        } else {
            echo ("$a / $b = " . ($a / $b));
        }
        break;
    case "**":
        echo ("$a ** $b = " . ($a ** $b));
        break;
    default:
        echo ("КРАШ!!!");
}


// Прикол что я забил переменные и только начал switch писать как ai мне даёт подсказку.
// И попросту дописывает весь калькулятор за меня. Он конечно не заработал. Но проблема
// там была из-за того что я удрал пробелы у $operation, поставил на него trim(), и всё заработало.
// Поменял вывод результат и всё. 
// 2025-01-10 01:44

?>