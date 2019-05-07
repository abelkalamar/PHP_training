<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>ToDoApp</title>
</head>

<body>
  <div class="container">
    <h1>To-Do Application </h1>
    <form method="POST" class="addTodo">
      <h2>Add new To-Do</h2>
      <label for="title">Title:</label>
      <input type="text" name="title">
      <label for="description">Description:</label>
      <textarea type="text" name="description"></textarea>
      <button type="submit" name="submit">Add</button>
    </form>
    <div class="todos">
      <h2>Recent To-Do-s</h2>
      <?php include 'todoApp.php'; ?>
    </div>
  </div>
</body>

</html>