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
        $post = $model->findOne(9);

        $this->set(compact('post'));
        var_dump($model);
    }
}