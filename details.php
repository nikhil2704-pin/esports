<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $game = $_POST['search'];

    $sql = 'SELECT * FROM games WHERE game = :game';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['game' => $game]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['game'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>game :</b> <?= $row['game'] ?></h4>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>