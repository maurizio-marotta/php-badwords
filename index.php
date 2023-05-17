<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Badword</title>
</head>
<body>
  <div class="container">
    <h1>BEDWORD</h1>
  </div>
  <form action="./server.php" method="post"> 
  <div class="form-group">
    <textarea class="form-control" id="text" name="text" rows="3" placeholder="inserisci testo"></textarea>
  </div>
  <div class="form-group">
    <label for="fname">parola da cambiare:</label><br>
    <input type="text" id="fname" name="parola">
  </div>
  <div class="bottone mt-3">
    <input type="submit" value="Submit">
  </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>