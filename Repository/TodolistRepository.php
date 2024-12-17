<?php

namespace Repository {
    use Entity\todolist;
    interface todolistRepository
    {
        function save(todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }
    class todolistRepositoryImpl implements todolistRepository {
        public array $todolist = array();
        function save (todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }
        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }
            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }
            unset($this->todolist[sizeof($this->todolist)]);
            return true;
        }
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}