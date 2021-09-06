<?php

class actor extends database{

    public $_actor_id
    public $_first_name
    public $_last_name 
    private $_last_update 

    public function __construct($actor_id,$first_name,$last_name)
    {
        $this->setActor($actor_id);
        $this->setFname($first_name);
        $this->setLname($last_name);
    }

};
?>