<?php

require 'op.php';
class Cow extends Animal {
    public function __construct()
    {
        $this->set_Family("cow");
        $this->set_Food("grass");
    }
}
$cow=new Cow();
print_r($cow);

