<?php
session_start();

$result = '';
$errorMsg = '';

if (!isset($_SESSION['guess'])) {
  $number = rand(1, 100);
  $_SESSION['guess'] = $number;
}

if (isset($_POST["submit"])) {

  $guess = $_POST["guess"];

  if (empty($guess)) {
    $errorMsg = 'Please guess a number!';
  } elseif ($guess > 100) {
    $errorMsg = 'Your guess must be less than 100!';
  } else {
    if ($guess > $_SESSION['guess']) {
      $result = 'Your guess is too high!';
    } elseif ($guess == $_SESSION['guess']) {
      $result = 'Bingooo!';
      unset($_SESSION['guess']);
    } else {
      $result = 'Your guess is too low!';
    }
  }
}
?>
<h2>Number guessing</h2>
<form method="POST">
  <label for="guess">Guess a number between 1 and 100:</label>
  <input type="number" name="guess">
  <button name="submit">Submit</button>
  <div>
    <h3>
      <?php if ($result !== '') {
        echo $result;
      } elseif ($errorMsg !== '') {
        echo $errorMsg;
      } ?>
    </h3>
  </div>
</form>