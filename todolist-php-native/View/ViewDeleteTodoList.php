<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Logic/DeleteTodoList.php";

function viewDeleteTodoList(){

    echo "--------------" . PHP_EOL;
    echo "DELETE TODO " . PHP_EOL;
    echo "--------------" . PHP_EOL;

    $option = input("Input Todo Number (press 'x' to cancel)");

    if($option == "x"){
        echo "CANCELED DELETE TODO" . PHP_EOL;
    }else{
        $success = deleteTodoList($option);

        if($success){
            echo "Todo number ($option) successfully deleted" . PHP_EOL;
        }else{
            echo "Todo number ($option) failed to deleted" . PHP_EOL;
        }
    }
}

?>