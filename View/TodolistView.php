<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "X. Exit" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
            } elseif ($pilihan == "2") {
                $this->removeTodolist();
            } elseif ($pilihan == "X") {
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi" . PHP_EOL;
        }
    
        function addTodolist(): void {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (X untuk batal");

            if ($todo == "X") {
                echo "Batal memilih todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        } 

        function removeTodolist(): void {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (X untuk batalkan)");

            if ($pilihan == "X") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}