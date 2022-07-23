<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("ia");
addTodoList("Nur");
addTodoList("Aidah");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

showTodolist();

viewRemoveTodoLIst();

showTodolist();