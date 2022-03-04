<?php 

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

class TodoListView {

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void {

            while(true){
                echo "--------------" . PHP_EOL;
                echo "TODOLIST:" . PHP_EOL;
                echo "--------------" . PHP_EOL;

                $this->todoListService->showTodoList();

                echo "--------------" . PHP_EOL;
                echo "MENU:" . PHP_EOL;
                echo "--------------" . PHP_EOL;
                echo "1. Create Todo" . PHP_EOL;
                echo "2. Delete Todo" . PHP_EOL;
                echo "3. Quit" . PHP_EOL;
                echo "--------------" . PHP_EOL;
        
                $option = InputHelper::input("Select");
        
                if($option == "1"){
                    $this->createTodoList();
                }else if($option == "2"){
                    $this->deleteTodoList();
                }else if($option == "3"){
                    break;
                }else{
                    echo "--------------" . PHP_EOL;
                    echo "NOT AVAILABLE" . PHP_EOL;
                }
            }
        
            echo "QUIT" . PHP_EOL;

        }

        function createTodoList(): void {

            echo "--------------" . PHP_EOL;
            echo "CREATE TODO " . PHP_EOL;
            echo "--------------" . PHP_EOL;
            
            $todo = InputHelper::input("Create Todo (press 'x' to cancel)");
        
            if($todo == "x"){
                echo "CANCELED CREATE TODO" . PHP_EOL;
            }else{
                $this->todoListService->createTodoList($todo);
            }
        
        }

        function deleteTodoList(): void {

            echo "--------------" . PHP_EOL;
            echo "DELETE TODO " . PHP_EOL;
            echo "--------------" . PHP_EOL;
        
            $option = InputHelper::input("Input Todo Number (press 'x' to cancel)");
        
            if($option == "x"){
                echo "CANCELED DELETE TODO" . PHP_EOL;
            }else{
                $success = $this->todoListService->deleteTodoList($option);
            }
        }

    }

}


?>