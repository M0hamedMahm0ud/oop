<?php
require 'op.php';
class Lion extends Animal{
    public $owner;
    public function __construct()
    {
        $this->set_Family("lion");
        $this->set_Food("meat");
        $this->set_owner("ali");

    }
    public function set_owner($owner){
$this->owner=$owner;
    }
}
$lion=new Lion();
print_r($lion);
