<?php

class test
{
	function __construct()
	{
		echo "oke i am test construct";
	}
	function parth()
	{
		echo "parth";
	}


}




class xyx extends test 
{
	function __construct()
	{

		echo "i am xyx cinstruct";
		parent::__construct();
		
	}

	function parth()
	{

		echo "i am parth form vxyx";
	}
	function akash()
	{
		echo "akash";
	}

}

$obj = new xyx;
$obj->parth();


?>