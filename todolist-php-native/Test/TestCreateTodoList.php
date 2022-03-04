<?php 

require_once "../Model/TodoList.php";
require_once "../Logic/CreateTodoList.php";

createTodoList("izzan");
createTodoList("khairil");
createTodoList("anam");

var_dump($todoList);


?>