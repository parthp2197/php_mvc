<?php
//Practice
class test
{
	function parth()
	{
		echo "parth";
	}
}
class xyx  
{

	function akash()
	{
		echo "akash";
	}

}
class tru  
{

	public $obj1;
	public $obj2;

	public function __construct()
	{
		$this->obj1 = new test();
		$this->obj2 = new xyx();
	}

	function fg()
	{
		$this->obj1->parth();
	}

}


$cc = new tru();

$cc->fg();



?>