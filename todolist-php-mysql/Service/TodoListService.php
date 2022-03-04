<?php 

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService {

        function showTodoList(): void;

        function createTodoList(string $todo): void;

        function deleteTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService {
      
        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository){
            $this->todoListRepository = $todoListRepository;
        }

        function showTodoList(): void {

            $todoList = $this->todoListRepository->get();

            if($todoList == []){
                echo "(null)" . PHP_EOL;
            }else{
                foreach($todoList as $value){
                    echo $value->getId() . "." . $value->getTodo() . PHP_EOL;
                }
            }
        }

        function createTodoList(string $todo): void {

            $todoList = new TodoList($todo);

            $this->todoListRepository->create($todoList);

            echo "Todo successfully created!" . PHP_EOL;

        }

        function deleteTodoList(int $number): void {
            
            if($this->todoListRepository->delete($number)){
                echo "Todo ($number) successfully deleted!" . PHP_EOL;
            }else{
                echo "Todo ($number) failed to deleted!" . PHP_EOL;
            }
        }


    }

}

?>