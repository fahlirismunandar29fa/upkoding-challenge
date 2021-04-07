<?php
require 'proces.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Count Your Body!</title>
</head>

<body>
  <h1>Count your ideal weight</h1>
  <div class="container">
    <form action="" method="GET">
      <label for="">Gender &nbsp; : </label>
      <input type="radio" name="gender" value="girl" required id="girl"><label for="girl" id="girl"> Women</label>
      <input type="radio" name="gender" value="boy" required id="man"><label for="man" id="man"> Man</label><br>
      <label for="">height &nbsp; &nbsp; : </label>
      <input type="number" name="height" required id="input" value="nilai" min=100 placeholder="height must more than 100..">&nbsp;CM<br>
      <label for="">weight&nbsp; &nbsp; : </label>
      <input type="text" id="input" value="<?= $result; ?>" disabled>&nbsp; KG<br>
      <button type="submit" name="submit" value="hitung">Count</button>
    </form>
    <div class="result">
      <h2>Your Result</h2>
    </div>
    <p><?= $result; ?></p>
  </div>
</body>

</html>