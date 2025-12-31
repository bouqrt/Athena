<?php

class Projet{
    private $id;
    private $title;
    private $description;
    private $start_date;
    private $end_date;
    private $status;
    private $manager_id;

    public function __construct($title, $manager_id, $description = null){
        $this->title =$title;
        $this->manager_id =$manager-id;
        $this->description =$description;
        $this->status ='planned';
    }

    public function getId(){
        return $this->id;
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

    public function getStartDate(){
        return $this->start_date;
    }
    public function setStartDate($start_date){
        $this->start_date =$start_date;
    }

    public function getEndDate(){
        return $this->end_date;
    }
    public function setEndDate($end_date){
        $this->end_date =$end_date;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status =$status;
    }

    public function getManagerId(){
        return $this->manager_id;
    }

}

    