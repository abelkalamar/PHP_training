<?php
if (isset($_SESSION['todolist'])) {
  foreach ($_SESSION['todolist']->todos as $key=>$todo) {
    include 'todoView.php';
  }
}
