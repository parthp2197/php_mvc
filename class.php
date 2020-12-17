<?php

class test
{

	function __construct($class_name)
	{
		echo "i am construct from ".$class_name;
	}

	public function parth($lname = "")
	{
		if($lname == '')
		{
			echo "parth";	
		}
		else
		{
			echo "hello parth ".$lname;	
		}
				
	}



}

$obj = new test("vghfghfg");
//$obj->parth();



?>