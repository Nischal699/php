<?php
class myclass{
    public $name;
    function set_data($name1){
        $this->name=$name1;
    }
    function get_data()
    {
        return $this->name;
    }
}
$ob1 = new myclass();
$ob1->set_data("Manish");
echo $ob1->get_data();
?>