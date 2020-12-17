<?php
class Model
{
	public $db;
	public function __construct()
	{
		$this->db = new mysqli("localhost","root","","12_dec_mvc");
		//url, username,password, db name

		
	}
	public function insert(string $table,array $data)
	{
			//print_r($data);
			$k = array_keys($data);
			$v =  array_values($data);
			//print_r($k);
			$keys =   implode("`,`",$k);
			$val = implode("','",array_values($data));
			echo  $sql = "INSERT INTO `$table`(`$keys`) VALUES ('$val')";
			$ex =  $this->db->query($sql);
	}
	function select_all(string $table)
	{
		$sql = "SELECT * FROM `$table`";
		$ex = $this->db->query($sql);
		while($res = mysqli_fetch_object($ex))
		{
			$r[] = $res;
		}
		return $r;
	}
	public function delete(string $table,array $where)
	{
		$con = "";
		//$con .=" tech";
		//echo $con;
	    foreach ($where as $key => $value) 
	    {
			$con  .= "`$key` = '$value' AND";
		}
		//echo $con;
		$con = rtrim($con,'AND');
		//echo $con;
		$sql = "DELETE FROM `$table` WHERE $con";
		return $ex = $this->db->query($sql);
	}
	public function multipledelete(string $table,array $d)
	{
		// echo "<pre>";
		// print_r($d); 
		foreach ($d as $keys => $values)
		// {
			// $con =  "`$keys` and $values";
		// }
		$q = "DELETE FROM `$table` WHERE `$keys` IN ($values);";
		$run = $this->db->query($q);
	}
}
?>