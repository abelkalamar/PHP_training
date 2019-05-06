<?php

$msg = '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {

  $firstNum = $_POST['firstNum'];
  $secondNum = $_POST['secondNum'];
  $thirdNum = $_POST['thirdNum'];
  $fourthNum = $_POST['fourthNum'];
  $fifthNum = $_POST['fifthNum'];

  if (!empty($firstNum) && !empty($secondNum) && !empty($thirdNum) && !empty($fourthNum) && !empty($fifthNum)) {
    $sum = $firstNum + $secondNum + $thirdNum + $fourthNum + $fifthNum;
    $average = $sum / 5;
  } else {
    $msg = 'Please enter all numbers!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>PHP</title>
</head>

<body>
  <div class="error">
    <?php if ($msg != '') : ?>
      <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif ?>
  </div>
  <form method="POST">
    <label for="firstNum">First number:</label>
    <input type="text" name="firstNum" id="firstNum" value="<?php echo isset($_POST['firstNum']) ? $_POST['firstNum'] : ''; ?>"><br>
    <label for="secondNum">Second number:</label>
    <input type="text" name="secondNum" id="secondNum" value="<?php echo isset($_POST['secondNum']) ? $_POST['secondNum'] : ''; ?>"><br>
    <label for="thirdNum">Third number:</label>
    <input type="text" name="thirdNum" id="thirdNum" value="<?php echo isset($_POST['thirdNum']) ? $_POST['thirdNum'] : ''; ?>"><br>
    <label for="fourthNum">Forth number:</label>
    <input type="text" name="fourthNum" id="fourthNum" value="<?php echo isset($_POST['fourthNum']) ? $_POST['fourthNum'] : ''; ?>"><br>
    <label for="fifthNum">Fifth number:</label>
    <input type="text" name="fifthNum" id="fifthNum" value="<?php echo isset($_POST['fifthNum']) ? $_POST['fifthNum'] : ''; ?>"><br>
    <div class="result">
      <?php if (isset($sum) && isset($average)) {
        echo " Sum: {$sum}, Average: {$average}.";
      } ?>
    </div>
    <button type="submit" name="submit">Evaluate</button>
  </form>
</body>

</html>