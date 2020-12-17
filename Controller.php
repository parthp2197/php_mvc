<?php
	include 'model.php';
	class Controller extends Model
	{
		public $c;
		public function __construct()
		{
			parent::__construct();
			if($_SERVER['PATH_INFO'] == '/form')
			{
				if(isset($_POST['submit']))
				{
			        $name = $_POST["name"];
		   	        $lname = $_POST['lname'];
			        $gender = $_POST['gender'];
			        $email = $_POST['email'];
			        $password = $_POST['password'];
			        $hby = $_POST['hby'];
			        $h = implode(',',$hby);
			        $data = array( 
			       	"name" =>$name,
			       	"lname" => $lname,
			       	"gender" => $gender,
			       	"email" => $email,
			       	"password" => $password,
			       	"hobbies" => $h );
			        // print_r($data);
			        $ins = $this->insert("user",$data);
				}
				include('form.php');
			}
			if($_SERVER['PATH_INFO'] == '/showdata')
	      	{
				$data = $this->select_all("user");     
				// echo "<pre>";
				// print_r($data); 		
	      		include 'showdata.php';
	     	}
			if($_SERVER['PATH_INFO'] == '/delete')
		    {
		    	if(isset($_GET['id']))
		    	{
		    		$id = $_GET['id'];
		    		$where = array("id" => $id);
		    		$delete =  $this->delete("user",$where);
		    		if($delete)
		    		{
		    			header('location:showdata');
		    		}
		    		else
		    		{
		    			echo "Error";
		    		}
		    	}
		    }
		    if($_SERVER['PATH_INFO'] == '/muldelete')
		    {
		    	if(isset($_GET['dlt']))
		    	{
		    		echo "<pre>";
		    		// echo "Pressed delete";
		    		$id = $_GET['abc'];
		    		$values = array_values($id);
		    		$v = implode(",",$values);
		    		// echo $v;
		    		$d = array("id" => $v);
					// $d = implode(',',$abc);
					// print_r($d);
					$muldelete = $this->multipledelete("user",$d);				
					header('location:showdata');	
		    	}
		    }		
		}
	}
	$obj = new Controller();
?>