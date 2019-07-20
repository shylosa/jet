<?php

namespace app\controllers;

use app\models\Post;
use jet\App;

class PostController extends AppController
{
    public function indexAction(): void
    {
        $model = new Post;
        $posts = $model->findAll();

        $title = App::$app->getProperty('blog_name');
        $this->set(compact('title', 'posts'));
    }
}