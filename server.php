<?php

$text = $_POST['text'];
$parola = $_POST ['parola'];

$fixedText = str_replace($parola, '***', $text);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
  <h1>testo orgiginale (lunghezza <?php echo strlen($text) ?> )</h1>
  <span> <?php echo $text ?></span>
  </div>
  <div>
  <h1>testo corretto (lunghezza <?php echo strlen($fixedText) ?> )</h1>
  <span> <?php echo $fixedText ?></span>
  </div>
</body>
</html>