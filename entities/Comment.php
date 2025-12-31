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

    
    public function getId() { 
        return $this->id; 
    }

    public function getContent() { 
        return $this->content; 
    }
    public function setContent($content) {
        $this->content = $content; 
    }

    public function getUserId() {
        return $this->user_id; 
    }

    public function getTaskId() { 
        return $this->task_id; 
    }
    
    public function getCreatedAt() { 
        return $this->created_at; 
    }

    

}