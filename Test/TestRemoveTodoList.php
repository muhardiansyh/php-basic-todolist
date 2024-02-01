<?php 

require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Pergi kesekolah");
addTodoList("Pergi kepasar untuk berbelanja");
addTodoList("Mengerjakan tugas");
addTodoList("Membantu orang tua");

showTodoList();

removeTodoList(2);

showTodoList();

?>