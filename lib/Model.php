<?php

abstract class Model
{
    private $dataBaseTable;

    public function __construct($dataBaseTable)
    {
        $this->dataBaseTable = $dataBaseTable;
        // echo $this->dataBaseTable;
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

    public function update($data)
    {
        extract($data);

        $this->connect()->query(
            "UPDATE $this->dataBaseTable SET
            name = '$name',
            lastName = '$lastName',
            email = '$email',
            gender = '$gender',
            age = $age,
            streetAddress = '$streetAddress',
            city = '$city',
            state = '$state',
            PC = '$PC',
            phoneNumber = '$phoneNumber'
            WHERE id = $id"
        );
    }
    public function delete($id)
    {
        $this->connect()->query(
            "DELETE FROM $this->dataBaseTable
             WHERE id = $id"
        );
    }
}
