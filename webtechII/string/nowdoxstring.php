<?php  
   $lang="PHP";
   $x=20;
   $str = <<<'STRING'
   It is an example of Nowdoc string.
   it can include multiple lines 
   and include single quote ' and double quotes "
   IT doesn't expand the value of $lang variable $x
STRING;
echo $str;
?>