<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList(){

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("izzan");
    $todoListRepository->todoList[2] = new TodoList("khairil");
    $todoListRepository->todoList[3] = new TodoList("anam");

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}


function testCreateTodoList(){

    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListService->showTodoList();
}

function testDeleteTodoList(){

    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListService->showTodoList();
    $todoListService->deleteTodoList(1);
    $todoListService->showTodoList();

}

// testShowTodoList();
// testCreateTodoList();
testDeleteTodoList();


?>