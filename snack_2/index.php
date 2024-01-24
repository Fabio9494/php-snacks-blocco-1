<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <div class="col-6">
                        <label for="control-label">NOME</label>
                        <input type="text" id="nome" class="form-control" name="name" required>
                    </div>
                    <div class="col-6">
                        <label for="control-label">EMAIL</label>
                        <input type="text" id="email" class="form-control" name="mail" required>
                    </div>
                    <div class="col-6">
                        <label for="control-label">ETA'</label>
                        <input type="text" id="age" class="form-control" name="age" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="my-2">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
       if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
        echo "<div>ACCESSO RIUSCITO</div>";
      } else {
        echo "<div>ACCESSO NEGATO</div>";
      }
    ?>
</body>
</html>