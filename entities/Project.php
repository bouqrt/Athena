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

    