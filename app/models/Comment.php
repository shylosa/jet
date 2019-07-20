<?php

namespace app\models;

use jet\base\Model;

class Comment extends AppModel
{
    private $author;

    private $textComment;

    private $publishedAt;

    /**
     * Comment constructor.
     */
    public function __construct()
    {
        Model::__construct();
    }

    /**
     * @return mixed
     */
    public function getTextComment()
    {
        return $this->textComment;
    }

    /**
     * @param mixed $textComment
     */
    public function setTextComment($textComment): void
    {
        $this->textComment = $textComment;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param mixed $publishedAt
     */
    public function setPublishedAt($publishedAt): void
    {
        $this->publishedAt = $publishedAt;
    }
}