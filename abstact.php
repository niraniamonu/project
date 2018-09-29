<?php
abstract class Drawobject
{
	abstract function Area($a, $b="");
	function Color($color)
	{
		echo "<br/> Your selected Color is <font  color='red'><b>$color</b></font><br/>";
	}
}
class circle extends Drawobject
{
	function Area($r, $b="")
	{
		echo "<br/> Area Of Circle is ".(3.14*$r*$r);
	}
}
class rect extends Drawobject
{
	function Area($l, $b="")
	{
		echo "<br/> Area Of Rectangle is ".($l * $b);
	}
}

$obj = new circle();
$obj->Area(3);
$obj->Color("red");

$obj = new rect();
$obj->Area(3,4);
$obj->Color("green");

?>
