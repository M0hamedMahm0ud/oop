<?php

class Animal{
    private $family;
    private $food;

public function __construct($family,$food)
{
    $this->family = $family;
    $this->food=$food;
}
public function get_Family(){
return $this->family;
}
    public function set_Family($family){
        $this->family = $family;

    }
    public function get_Food(){
        return $this->food;
    }
    public function set_Food($food){
    $this->food=$food;

    }
}
$animal=new Animal("Family","food");
print_r($animal);

print_r($animal->get_Family());
print_r($animal->get_Food());




