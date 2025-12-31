<?php

class Sprint{
    private $id;
    private $project_id;
    private $name;
    private $start_date;
    private $end_date;

    public function __construct($project_id, $name, $start_date, $end_date){
        $this->project_id =$project_id;
        $this->name =$name;
        $this->start_date =$start_date;
        $this->end_date =$end_date;
    }

    public function getId(){
        return $this->id;
    }

    public function getProjectId(){
        return $this->project_id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name =$name;
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

}