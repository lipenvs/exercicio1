
<?php
function findNonRepeatedNumber($array)
{
  $frequency = array();
  foreach ($array as $number) {
    if (!isset($frequency[$number])) {
      $frequency[$number] = 0;
    }
    $frequency[$number]++;
  }

  foreach ($frequency as $number => $count) {
    if ($count === 1) {
      return $number;
    }
  }
}

// Coloque aqui o seu array (Input)
$input = array(5, 3, 4, 3, 5, 5, 3);

$result = findNonRepeatedNumber($input);
echo "Output: " . $result;
?>