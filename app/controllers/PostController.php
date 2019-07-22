<?php

namespace app\controllers;

use app\models\Post;
use jet\Router;

class PostController extends AppController
{
    public function indexAction(): void
    {
        $model = new Post;
        $posts = $model->findAll('ASC');

        $this->set(compact('posts'));
    }

    public function viewAction(): void
    {

        $model = new Post;
        $posts = $model->findOne(Router::getParamUrl());

        $this->set(compact('posts'));


    }
}