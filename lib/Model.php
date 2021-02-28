<?php

abstract class Model
{
    
    private $name;
    private $dataBaseTable;

    function __construct($dataBaseTable)
    {
        // $this->name = $name;
        $this->dataBaseTable = $dataBaseTable;
    }

    public function connect()
    {
        return new PDO(DNS,USER,PASSWORD);
    }
    public function get(){
        return $this->connect()->query("SELECT * FROM $this->dataBaseTable")->fetch();
    }
    public function getById($id){
        return $this->connect()->query("SELECT * FROM $this->dataBaseTable WHERE email='$id'")->fetch();
    }
    public function getByParam($param){
        return $this->connect()->query("SELECT * FROM $this->dataBaseTable WHERE $param[0]='$param[1]'")->fetch();
    }
    public function update(){

    }
    public function delete(){

    }
}