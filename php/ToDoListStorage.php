<?php

namespace listStorage;

function testNS()
{
    echo 'testNS';
}


/**
 *
 */
class ToDoListStorage
{
    public $tasks = [];
    public $fileName = '';

    public function __construct($fileName = '')
    {
        $this->fileName = $fileName;

        if ( file_exists($fileName) ) {
            $fileContent = file_get_contents($fileName);
            $this->tasks = json_decode($fileContent, true);
        }

        if ( !file_exists( dirname($fileName) ) ) {
            echo 'Необходипо создать каталог и  дать права доступа:' . '<br>';
            echo '<br>';
            echo 'mkdir ' . dirname($fileName) . '<br>';
            echo 'chmod 777 ' . dirname($fileName) . '<br>';
            exit();
        }
    }

    public function createTask($taskName)
    {
        $id = 0;
        $date = date('Y-m-d');

        foreach ($this->tasks as $key => $value) {
            if ($value['id'] > $id) {
                $id = $value['id'];
            }
        }

        $this->tasks[] = ['id' => $id + 1, 'title' => $taskName, 'done' => false, 'date' => $date];
    }

    public function removeTask($taskId)
    {
        $result = [];

        foreach ($this->tasks as $key => $value) {
            if ($value['id'] !== $taskId) {
                $result[] = $value;
            }
        }

        $this->tasks = $result;
    }

    public function taskDone($taskId)
    {
        foreach ($this->tasks as $key => $value) {
            if ($value['id'] === $taskId) {
                $this->tasks[$key]['done'] = true;
            }
        }
    }

    public function saveToJSON()
    {
        $fileContent = json_encode($this->tasks);

        if ( !file_put_contents($this->fileName, $fileContent) ) {
            echo 'Необходипо дать права доступа:' . '<br>';
            echo '<br>';
            echo 'chmod 777 ' . dirname($this->fileName) . '<br>';
        }
    }

    public function printToDoList()
    {
        foreach ($this->tasks as $key => $value) {
            echo 'задача №' . $value['id'] . '<br>';
            echo $value['title'] . ' ' . $value['date'] . '<br>';
            echo ($value['done'] ? 'Вполнена' : ' Не выполнена') . '<br>';
            echo '-------------------------------------------' . '<br>';
        }
    }

    public function getArrayToDoList()
    {
        return $this->tasks;
    }

    public function getJSONToDoList()
    {
        return json_encode($this->tasks);
    }
}
