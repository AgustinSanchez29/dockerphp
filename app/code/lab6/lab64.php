<?php
include("class_lib.php");

print Foo::$mystatic . "value (1)<br>";
$foo = new Foo();
print $foo->staticvalor() . "value (2)<br>";

print $foo->$mystatic . " balue (3) <br>";
print Bar::$mystatic . "value (4)<br>";
$bar = new Bar();
print $bar->foostatic() . "value(5)";
