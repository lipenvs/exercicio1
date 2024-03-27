<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO 1 - DESAFIO DEV - Encontrar número não repetido</title>
</head>

<body>
  <h1>
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
  </h1>

  <script>
  </script>
</body>

</html>