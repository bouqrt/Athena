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

    

}