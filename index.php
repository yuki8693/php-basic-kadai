<?php
$www = [
  '国語' => 70,
  '数学' => 80
];

foreach ($www as $ke => $val) {
  echo "{$ke}は{$val}点です";
  echo '<br>';
}