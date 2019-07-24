<?php

namespace app\controllers;

use app\models\Post;
use jet\Router;

class PostController extends AppController
{
    public function indexAction(): void
    {
        if(!empty($_POST)){
            $post = new Post;
            $data = $_POST;
            $post->load($data);

            if(!$post->validate($data)){
                $post->getErrors();
                redirect();
            }

            if($post->save($post->getTable())){
                $_SESSION['success'] = "Вы успешно добавили пост!";
            } else {
                $_SESSION['success'] = "Ошибка. Попробуйте снова.";
            }
            redirect();
        }

        $model = new Post;
        $posts = $model->findBySql(
            'SELECT post_table.* ,
                        (SELECT  COUNT(*) 
                        FROM comment_table 
                        WHERE comment_table.post_id=post_table.id)comment_qty
                        FROM post_table 
                        ORDER BY published_at DESC;');

        $popularPosts = $model->findBySql(
            'SELECT post_table.* ,
                        (SELECT  COUNT(*) 
                        FROM comment_table 
                        WHERE comment_table.post_id=post_table.id)cnt
                        FROM post_table 
                        ORDER BY cnt DESC 
                        LIMIT 5;');

        $this->set(compact('posts','popularPosts'));
    }

    public function viewAction(): void
    {
        $model = new Post;
        $this->layout = 'singlepost';
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
                    ORDER BY published_at ASC"
        );
        $this->set(compact('posts', 'comments'));


    }
}