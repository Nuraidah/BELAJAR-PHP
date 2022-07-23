<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList,php";
require_once "../BusimessLogic/RemoveTodlist.php";

addTodoList("Ia");
addTodoList("Nur");
addTodoList("Aidah");
addTodoList("Fatimah");
addTodoList("Summayah");

showTodolist();

removeTodoList(3);

showTodolist();

removeTodoList(2);

showTodolist();

$success = removeTodoList(4);
var_dump($success);

showTodolist();