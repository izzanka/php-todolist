<?php 

require_once "../Model/TodoList.php";
require_once "../View/ViewDeleteTodoList.php";
require_once "../Logic/DeleteTodoList.php";
require_once "../Logic/CreateTodoList.php";
require_once "../Logic/ShowTodoList.php";

createTodoList("izzan");
createTodoList("khairil");
createTodoList("anam");

showTodoList();

viewDeleteTodoList();

showTodoList();


?>