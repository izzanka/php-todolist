<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodoListView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use \View\TodoListView;

function testViewShowTodoList(): void {

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListView->showTodoList();
}

function testViewCreateTodoList(): void {

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListService->showTodoList();

    $todoListView->createTodoList();

    $todoListService->showTodoList();
}

function testViewDeleteTodoList(): void {

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->createTodoList("izzan");
    $todoListService->createTodoList("khairil");
    $todoListService->createTodoList("anam");

    $todoListService->showTodoList();

    $todoListView->deleteTodoList();

    $todoListService->showTodoList();
}

testViewDeleteTodoList();

// testViewCreateTodoList();

// testViewShowTodoList();

?>