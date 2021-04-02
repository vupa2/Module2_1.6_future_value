<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
      'invesment' => $_POST['investment'],
      'interest' => $_POST['interest'],
      'year' => $_POST['year']
    ];
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>[Bài tập] Ứng dụng Future Value Calculator</title>
  <style>
    form > * {
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <h1>[Bài tập] Ứng dụng Future Value Calculator</h1>
  <form action="" method="post">
    <div>
      <input type="number" name="investment" id="investment" value="<?= $data['invesment']; ?>">
      <label for="investment">Investment Amount</label>
    </div>
    <div>
      <input type="number" name="interest" id="interest" value="<?= $data['interest']; ?>">
      <label for="interest">Yearly Interest Rate</label>
    </div>
    <div>
      <input type="number" name="year" id="year" value="<?= $data['year']; ?>">
      <label for="year">Number of Years</label>
    </div>
    <div>
    <button type="submit">Submit</button>
    </div>
  </form>
  
  <h4><?= $result; ?></h4>
</body>
</html>
