<?php
 class myclass{
    public $x,$y;
     
    function __construct()
    {
        echo"I am constructor<br>";
    }
 }
 $c1 = new myclass();
 $c2 = new myclass();
 $c3 = new myclass();
?>