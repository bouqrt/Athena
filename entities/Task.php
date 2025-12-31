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


}