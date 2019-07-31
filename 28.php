<?php
/**
 * 28. Вывести таблицу умножения с помощью двух циклов for.
 */
?>

<table class="table table-bordered">
    <caption>Таблица умножения</caption>
  <tr>
    <th class="text-right">&nbsp;</th>
    <th class="text-right">2</th>
    <th class="text-right">3</th>
    <th class="text-right">4</th>
    <th class="text-right">5</th>
    <th class="text-right">6</th>
    <th class="text-right">7</th>
    <th class="text-right">8</th>
    <th class="text-right">9</th>
  </tr>
    <?php for ($a = 2; $a <= 9; $a++) : ?>
    <tr>
    <?= "<th class=\"text-right\">$a</th>" ?>
    <?php for ($b = 2; $b <= 9; $b++) : ?>
    <?= '<td class="text-right">' . $a * $b . '</td>' ?>
    <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>
