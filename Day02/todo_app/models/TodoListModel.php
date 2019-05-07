<?php
include 'TodoModel.php';

class TodoList
{

  private $name;
  private $todos;

  function __construct($name)
  {
    $this->name = $name;
  }

  function __get($fieldName)
  {
    return $this->$fieldName;
  }

  function addNewTodo($title, $description, $isDone = false)
  {
    $this->todos[] = new Todo($title, $description, $isDone);
  }
}
