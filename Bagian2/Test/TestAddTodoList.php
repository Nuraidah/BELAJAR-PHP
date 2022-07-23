<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Ia");
addTodoList("Nur");
addTodoList("Aidah");

var_dump($todoList);