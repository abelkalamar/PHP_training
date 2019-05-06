<?php

$inputs = 0;

if (filter_has_var(INPUT_POST, "submit")) {
  $inputs = $_POST['inputs'];
}

if (filter_has_var(INPUT_POST, "goBack")) {
  $inputs = 0;
}

if (filter_has_var(INPUT_POST, "evaluate")) {
  $sum = array_sum($_POST);
  $average = $sum / count($_POST);
}

?>

<h2>Parametric Average</h2>


<form method="POST">

  <?php if (!isset($inputs) || $inputs === 0) { ?>

    <label for="inputs">Number of inputs:</label>
    <input type="text" name="inputs">
    <button type="submit" name="submit">Submit</button>

  <?php } else { ?>


    <?php for ($i = 1; $i <= $inputs; $i++) { ?>
      <input type="text" name="<?php echo "num{$i}" ?>" placeholder="<?php echo "{$i}. number" ?>">
    <?php } ?>
    <button name="evaluate">Evaluate</button>

    <button name="goBack">Back</button>
  <?php } ?>
  <div>
    <?php if (isset($sum)) {
      echo "Sum: {$sum}. Average: {$average}.";
    } ?>
  </div>

</form>