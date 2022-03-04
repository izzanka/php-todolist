<?php 

function showTodoList(){

    global $todoList;

    if($todoList == []){
        echo "(null)" . PHP_EOL;
    }else{
        foreach($todoList as $number => $value){
            echo "$number. $value" . PHP_EOL;
        }
    }
}


?>