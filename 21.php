<?php
/**
 * 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.
 */
for ($a = 1; $a <= 9; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo $a;
    }
    echo "<br>\n";
}