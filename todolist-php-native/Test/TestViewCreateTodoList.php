<?php 

require_once "../View/ViewCreateTodoList.php";
require_once "../Logic/ShowTodoList.php";
require_once "../Logic/CreateTodoList.php";

createTodoList("izzan");
createTodoList("khairil");
createTodoList("anam");

viewCreateTodoList();
showTodoList();
viewCreateTodoList();
showTodoList();

?>