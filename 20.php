<?php
/**
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.
 */
for ($a = 'x'; strlen($a) <= 20; $a .= 'x') {
    echo "$a<br>\n";
}