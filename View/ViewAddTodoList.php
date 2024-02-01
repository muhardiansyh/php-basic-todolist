<?php 

require_once "../Helper/input.php";
require_once "../BusinessLogic/AddTodoList.php";
function viewAddTodoList(){
    echo "Menambahkan TODO" . PHP_EOL;

    $todo = input("TODO (x) untuk batal");
    if($todo == "x"){
        echo "Batal menambah todo";
    } else {
        addTodoList($todo);
    }
}

?>