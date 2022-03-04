<?php 

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository {

        function create(TodoList $todoList): void;

        function delete(int $number): bool;

        function get(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository{

        public array $todoList = array();
        
        function create(TodoList $todoList): void {
            $number = sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
        }

        function delete(int $number): bool {

            if($number > sizeof($this->todoList)){
                return false;
            }
            
            for ($i = $number; $i < sizeof($this->todoList); $i++) { 
                $this->todoList[$i] = $this->todoList[$i+1];
            }
        
            unset($this->todoList[sizeof($this->todoList)]);
        
            return true;
        
        }

        function get(): array {
            return $this->todoList;
        }
    }

}

?>