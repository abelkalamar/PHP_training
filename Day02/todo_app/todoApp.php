<?php
include 'models/TodoListModel.php';
session_start();

$importantThings = new TodoList("important");

if (!isset($_SESSION['todolist'])) {
  $_SESSION['todolist'] = $importantThings;
}

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $_SESSION['todolist']->addNewTodo($title, $description);
}

if (isset($_POST['delete'])) {
  unset($_SESSION['todolist']);
}

include 'views/todoListView.php';

if (filter_has_var(INPUT_POST, "removeTodo")) {
  echo 'okay';
}