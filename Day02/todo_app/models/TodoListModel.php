<?php
include 'TodoModel.php';

class TodoList
{

  private $name;
  private $todos;

  function __construct($name)
  {
    $this->name = $name;
    $this->todos = [];
  }

  function __get($fieldName)
  {
    return $this->$fieldName;
  }

  function addNewTodo($title, $description, $isDone = false)
  {
    $todo = new Todo($title, $description, $isDone);
    $this->todos[] = $todo;
  }
}
