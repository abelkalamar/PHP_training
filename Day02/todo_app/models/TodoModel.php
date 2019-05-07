<?php

class Todo
{

  public static $INCREMENT_ID = 1;

  private $id;
  private $title;
  private $description;
  private $isDone;

  function __construct($title, $description, $isDone = false)
  {
    $this->id = Todo::$INCREMENT_ID++;
    $this->title = $title;
    $this->description = $description;
    $this->isDone = $isDone;
  }

  function __get($fieldName)
  {
    return $this->$fieldName;
  }

  function __set($fieldName, $value)
  {
    if (property_exists('Todo', $fieldName) && $value) {
      $this->$fieldName = $value;
    }
  }
}
