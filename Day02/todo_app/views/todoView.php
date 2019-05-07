<div class="singleTodo">
  <p class="id"><?php echo $key + 1; ?></p>
  <p class="title"><?php echo $todo->title; ?></p>
  <p class="description"><?php echo $todo->description; ?></p>
  <button value="<?php $key; ?>" name="removeTodo">Remove</button>
</div>