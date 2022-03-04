<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Logic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewCreateTodoList.php";
require_once __DIR__ . "/../View/ViewDeleteTodoList.php";

function viewShowTodoList(){

    while(true){

        echo "--------------" . PHP_EOL;
        echo "TODOLIST:" . PHP_EOL;
        showTodoList();
        echo "--------------" . PHP_EOL;
        echo "MENU:" . PHP_EOL;
        echo "--------------" . PHP_EOL;
        echo "1. Create Todo" . PHP_EOL;
        echo "2. Delete Todo" . PHP_EOL;
        echo "3. Quit" . PHP_EOL;
        echo "--------------" . PHP_EOL;

        $option = input("Choose");

        if($option == "1"){
            viewCreateTodoList();
        }else if($option == "2"){
            viewDeleteTodoList();
        }else if($option == "3"){
            break;
        }else{
            echo "--------------" . PHP_EOL;
            echo "NOT AVAILABLE" . PHP_EOL;
        }
    }

    echo "QUIT" . PHP_EOL;

}

?>