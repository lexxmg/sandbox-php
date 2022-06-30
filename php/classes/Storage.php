<?php

namespace classes\storage;

/**
 *
 */
class Storage
{
    public $storage = [];
    public $fileName = '';

    public function __construct($fileName = '')
    {
        $this->getStorage($fileName);
    }

    public function getStorage($fileName)
    {
        $this->fileName = $fileName;

        if ( file_exists($fileName) ) {
            $fileContent = file_get_contents($fileName);
            $this->storage = json_decode($fileContent, true);
        }

        if ( !file_exists( dirname($fileName) ) ) {
            echo 'Необходипо создать каталог и  дать права доступа:' . '<br>';
            echo '<br>';
            echo 'mkdir ' . dirname($fileName) . '<br>';
            echo 'chmod 777 ' . dirname($fileName) . '<br>';
            exit();
        }
    }

    public function setSrorage($arr)
    {
        $fileContent = json_encode($arr);

        if ( !file_put_contents($this->fileName, $fileContent) ) {
            echo 'Необходипо дать права доступа:' . '<br>';
            echo '<br>';
            echo 'chmod 777 ' . dirname($this->fileName) . '<br>';
        }
    }

    public function getArrayStorage()
    {
        return $this->storage;
    }

    public function getJSONstorage()
    {
        return json_encode($this->storage);
    }
}
