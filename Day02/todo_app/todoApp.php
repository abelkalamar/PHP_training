<?php
include 'models/TodoListModel.php';
session_start();

if (!isset($importantThings)) {
  $importantThings = new TodoList("important");
  $_SESSION['todolist'] = $importantThings;
}

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
}

// $importantThings->addNewTodo('Go climbing', 'Monkey Boulder, at 18:00');
// $importantThings->addNewTodo('Go shopping', 'After climbing, but important before 22:00');
// $importantThings->addNewTodo('Cooking', 'After shopping');

include 'views/todoView.php';
