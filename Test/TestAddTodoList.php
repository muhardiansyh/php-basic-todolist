<?php 

require_once "../BusinessLogic/AddTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("playing football");
addTodoList("learn coding");
addTodoList("do homework");

var_dump($todoList);

?>