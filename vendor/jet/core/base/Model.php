<?php

namespace jet\base;

use jet\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $pk = 'id';
    protected $sort = 'NO_SORT';

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        $this->pdo = Db::instance();
    }

    public function query($sql){
        return $this->pdo->execute($sql);
    }

    public function findAll($sort = ''){
        switch ($sort){
            case 'NO_SORT':
                $sql = "SELECT * FROM ($this->table)";
            case 'ASC':
                $sql = "SELECT * FROM ($this->table) ORDER BY published_at";
            case 'DESC':
                $sql = "SELECT * FROM ($this->table) ORDER BY published_at DESC";
        }

        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = ''){
        $field = $field ?: $this->pk;
        $sql = "SELECT * FROM ($this->table) WHERE $field = ?";

        return $this->pdo->query($sql, [$id]);
    }

}