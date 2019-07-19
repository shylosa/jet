<?php

namespace jet\base;

use jet\Db;

abstract class Model{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }

}