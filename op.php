<?php

class Animal{
    public $family;
    public $food;

public function __construct($family,$food)
{
    $this->family = $family;
    $this->food=$food;
}
public function get_Family(){

}
    public function set_Family($family){
        $this->family = $family;

    }
    public function get_Food(){

    }
    public function set_Food($food){
    $this->food=$food;

    }
}
$animal=new Animal("family","food");
print_r($animal);



