<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="#">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cesuratore</title>

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- PHP -->
  <?php
  $phrase = "Prova a censurare questa parola: cerbiatto";
  var_dump($phrase);
  $badword = $_GET["bad"];
  var_dump($badword);
  $replace = "";
  for ($i = 0; $i < strlen($badword); $i++) {
    $replace .= "*";
  }
  var_dump($replace);
  $cens_phrase = str_replace($badword, $replace, $phrase);
  var_dump($cens_phrase);
  ?>

  <!-- HTML -->
  <div class="container">
    <h1><?php echo $cens_phrase ?></h1>
    <div class="container-url">
      <h3>Usa questo url: <span>http://localhost:8888/php-badwords/?bad=cerbiatto</span></h3>
      <h3>Prova anche questo: <span>http://localhost:8888/php-badwords/?bad=parola</span></h3>
      <h3>E anche questo: <span>http://localhost:8888/php-badwords/?bad=censurare</span></h3>
    </div>
  </div>
</body>

</html>