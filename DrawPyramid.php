<?php

$errorMsg = '';
$pyramid = '';

if (filter_has_var(INPUT_POST, "submit")) {
  $rows = $_POST['rows'];
  if (!empty($rows)) {
    for ($i = 0; $i <= $rows; $i++) {
      $pyramid .= str_repeat("&nbsp;&nbsp;", ($rows - $i));
      $pyramid .= str_repeat("*", 2 * $i + 1);
      $pyramid .= "<br>";
    }
  } else {
    $errorMsg = 'Please add how many rows should the pyramid have!';
  }
}

?>
<h2> DrawPyramid</h2>
<div>
  <?php
  if ($pyramid !== '') {
    echo $pyramid;
  }
  ?>
</div>
<form method="POST">
  <label for="rows">Number of rows:</label>
  <input type="text" name="rows">
  <div>
    <?php
    if ($errorMsg !== '') {
      echo $errorMsg;
    }
    ?>
  </div>
  <button type="submit" name="submit">Draw</button>
</form>