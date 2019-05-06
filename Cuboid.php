<?php

$errorMsg = '';

if (filter_has_var(INPUT_POST, "submit")) {

  $lengthA = $_POST['lengthA'];
  $lengthB = $_POST['lengthB'];
  $height = $_POST['height'];

  if (!empty($lengthA) && !empty($lengthB) && !empty($height)) {
    if (filter_var($lengthA, FILTER_VALIDATE_INT) && filter_var($lengthB, FILTER_VALIDATE_INT) && filter_var($height, FILTER_VALIDATE_INT)) {
      $surface = 2 * (($lengthA * $lengthB) + ($lengthB * $height) + ($height * $lengthA));
      $volume = $lengthA * $lengthB * $height;
    } else {
      $errorMsg = 'Inputs should be numbers!';
    }
  } else {
    $errorMsg = 'Please fill in all inputs!';
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cuboid</title>
</head>

<body>
  <h2>Cuboid</h2>
  <form method="POST">
    <label for="lengthA">Length A:</label>
    <input type="text" name="lengthA" value="<?php echo isset($lengthA) ? $lengthA : '' ?>">
    <label for="lengthB">Length B:</label>
    <input type="text" name="lengthB" value="<?php echo isset($lengthB) ? $lengthB : '' ?>">
    <label for="height">Height:</label>
    <input type="text" name="height" value="<?php echo isset($height) ? $height : '' ?>">
    <div class="error">
      <?php if ($errorMsg != '') {
        echo $errorMsg;
      } ?>
    </div>
    <button type="submit" name="submit">Evaluate</button>
  </form>
  <div class="result">
      <?php if (isset($surface) && isset($volume)) {
        echo "Surface: {$surface}.<br>Volume: {$volume}.";
      } ?>
    </div>
</body>

</html>