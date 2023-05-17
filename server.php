<?php

$text = $_POST['text'];
$parola = $_POST ['parola'];

var_dump($text);
var_dump($parola);

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
  </div>
</body>
</html>