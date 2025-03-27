
<?php
class MyClass {
  public static $str = "Hello World!"; // properties
  
  public static function hello() { // method
    echo self::$str;
  }
}

echo MyClass::$str;
echo "<br>";
echo MyClass::hello();
?>