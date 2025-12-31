<?php 

class Task{
    private $id;
    private $sprint_id;
    private $title;
    private $description;
    private $status;
    private $priority;
    private $created_by;
    private $created_at;

    public function __construct($sprint_id ,$title, $created_by, $description= null){
        $this->sprint_id =$sprint_id;
        $this->title =$title;
        $this->created_by = $created_by;
        $this->description =$description;
        $this->status ='todo';
        $this->priority ='medium';
    }

    public function getId() {
        return $this->id; 
    }

    public function getSprintId(){
        return $this->spint_id;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title =$title;
    }

    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description =$description;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus(){
        $this->status =$status;
    }

    public function getPriority(){
        return $this->priority;
    }
    public function setPriority($priority){
        $this->priority =$priority;
    }

    public function getCreatedBy(){
        return $this->created_by;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }


}