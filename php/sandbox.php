<?php

//require_once './php/ToDoListStorage.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/ToDoListStorage.php';

use listStorage as ls;

$tasksList = new ls\ToDoListStorage($_SERVER['DOCUMENT_ROOT'] . '/upload/storage.json');

$tasksList->createTask('task' . uniqid());

//$tasksList->printToDoList();

$tasksList->removeTask(11);
//$tasksList->printToDoList();

$tasksList->taskDone(4);

$tasksList->printToDoList();

$tasksList->saveToJSON();
