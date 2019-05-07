<?php
if (isset($_SESSION['todolist'])) {
  foreach ($_SESSION['todolist']->todos as $todo) {
    include 'todoView.php';
  }
}
