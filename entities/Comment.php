<?php

class Comment {
    private $id;
    private $content;
    private $user_id;
    private $task_id;
    private $created_at;

    public function __construct($content, $user_id, $task_id) {
        $this->content = $content;
        $this->user_id = $user_id;
        $this->task_id = $task_id;
    }

}