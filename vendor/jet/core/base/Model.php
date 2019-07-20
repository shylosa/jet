<?php

namespace jet\base;

use jet\Db;

abstract class Model
{
    protected $pdo;
    protected $table;

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        $this->pdo = Db::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function findAll(){
        $sql = "SELECT * FROM ($this->table)";
        return $this->pdo->query($sql);
    }

}