<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../view/viewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewShowTodoList()
{
    while (true) {
        showTodolist();
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1") {
            viewAddTodoList();

        } else if ($pilihan == "2") {
            viewRemoveTodoLIst();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }

    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}