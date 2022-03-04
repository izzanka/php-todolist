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

        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }
        
        function create(TodoList $todoList): void {
            $sql = "INSERT INTO todolists(todo) VALUES (?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$todoList->getTodo()]);
        }

        function delete(int $number): bool {

            $sql = "SELECT id FROM todolists WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if ($statement->fetch()) {
                $sql = "DELETE FROM todolists WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            }else{
                return false;
            }
        }

        function get(): array {
            $sql = "SELECT id,todo FROM todolists";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            
            $results = [];

            foreach($statement as $row){
                $todoList = new TodoList();
                $todoList->setId($row['id']);
                $todoList->setTodo($row['todo']);

                $results[] = $todoList;
            }

            return $results;
        }
    }

}

?>