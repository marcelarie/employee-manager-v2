<?php

abstract class Model
{
    private $name;
    private $dataBaseTable;

    public function __construct($dataBaseTable)
    {
        // $this->name = $name;
        $this->dataBaseTable = $dataBaseTable;
    }

    public function connect()
    {
        return new PDO(DNS, USER, PASSWORD);
    }

    public function get()
    {
        $obj = $this->connect()->query("SELECT * FROM $this->dataBaseTable");

        return $obj->fetchAll();
    }

    public function getByParameters($parameters)
    {
        function querySelectGenerator($parameter, $key)
        {
            return "WHERE $key = '$parameter'";
        }
    
        $multipleParameters = implode(' AND ', array_map(
            'querySelectGenerator',
            $parameters,
            array_keys($parameters)
        ));

        return $this->connect()->query(
            "SELECT * FROM $this->dataBaseTable $multipleParameters"
        )->fetch();
    }

    public function update()
    {
    }
    public function delete()
    {
    }
}
