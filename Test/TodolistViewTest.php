<?php

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodolistView';
require_once __DIR__ . '/../Helper/InputHelper.php';

use \Entity\TodoList;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodoList(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("BelajarPHP");
    $todolistService->addTodolist("BelajarPHP OOP");
    $todolistService->addTodolist("BelajarPHP Database");

    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();


}

function testViewAddTodoList(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("BelajarPHP");
    $todolistService->addTodolist("BelajarPHP OOP");
    $todolistService->addTodolist("BelajarPHP Database");

    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();

}

function testViewRemoveTodoList(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("BelajarPHP");
    $todolistService->addTodolist("BelajarPHP OOP");
    $todolistService->addTodolist("BelajarPHP Database");

    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();
    $todolistView->removeTodolist();
    $todolistService->showTodoList();

}

testViewRemoveTodoList();