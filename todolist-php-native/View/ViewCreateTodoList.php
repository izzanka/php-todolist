<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/CreateTodoList.php";


function viewCreateTodoList(){
    
    echo "--------------" . PHP_EOL;
    echo "CREATE TODO " . PHP_EOL;
    echo "--------------" . PHP_EOL;
    
    $todo = input("Create Todo (press 'x' to cancel)");

    if($todo == "x"){
        echo "CANCELED CREATE TODO" . PHP_EOL;
    }else{
        createTodoList($todo);
    }

}

?>