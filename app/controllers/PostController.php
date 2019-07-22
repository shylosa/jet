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
        $postId = Router::getParamUrl();
        $posts = $model->findOne($postId);


        $comments = $model->findBySql(
            "SELECT
                        id,
                        author,
                        published_at,
                        text_comment
                    FROM comment_table
                    WHERE post_id = $postId
                    ORDER BY published_at"
        );
        $this->set(compact('posts', 'comments'));


    }
}