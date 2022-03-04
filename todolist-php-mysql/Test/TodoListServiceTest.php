<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\TodoList;
use Config\Database;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(){

    $connection = Database::getConnection();

    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListService->showTodoList();
}


function testCreateTodoList()
{
    $connection = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    // $todoListService->showTodoList();
}

function testDeleteTodoList(){

    $connection = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->deleteTodoList(5);
    $todoListService->deleteTodoList(1);
}

testShowTodoList();
// testCreateTodoList();
// testDeleteTodoList();


?>