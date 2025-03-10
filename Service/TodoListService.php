<?php
namespace Service {
    use Entity\Todolist;
    use Repository\TodoListRepository;
    interface TodolistService {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }
    class TodolistServiceImpl implements TodolistService {
        private TodolistRepository $todolistRepository;
        public function __construct(TodolistRepository $todolistRepository) {
                $this->todolistRepository = $todolistRepository;
        }
        function showTodoList(): void {
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }
        function addTodolist(string $todo): void {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }
        function removeTodolist(int $number): void {
            if($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }                  
    }
}