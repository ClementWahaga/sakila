<?php

class category extends database{

    public $_category_id 
    public $_name


    public function __construct($category_id,$name)
    {
        $this->setCategory($category_id);
        $this->setname($name);
        
    }
    //setter
    public function setCategory($category_id) {
        $this->category_id = $category_id;
        return $category_id;
    }

    public function setName($name) {
        $this->name = $fname;
        return $name;
    }
    //getter
    public function getCategory() {
        return $this->category_id;
    }

    public function getName() {
        return $this->name;
    }
}