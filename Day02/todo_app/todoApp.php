<?php
include 'models/TodoListModel.php';
session_start();

$importantThings = new TodoList("important");

if (!isset($_SESSION['todolist'])) {
  $_SESSION['todolist'] = $importantThings;
}
// $importantThings->addNewTodo('Go climbing', 'Monkey Boulder, at 18:00');
// $importantThings->addNewTodo('Go shopping', 'After climbing, but important before 22:00');
// $importantThings->addNewTodo('Cooking', 'After shopping');

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $_SESSION['todolist']->addNewTodo($title, $description);
}

if (isset($_POST['delete'])) {
  unset($_SESSION['todolist']);
}

include 'views/todoListView.php';
