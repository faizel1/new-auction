<?php


define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'root');
define('DB_NAME', 'auc');


class DB_con
{
	public $field;
	public $value;
	public $aa;
	public $where ;

	public $join;
	
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 return $this->dbh;
}

//Data Insertion Function
public function imp($table,$field){

$sql="INSERT INTO ".$table;
$sql.="(".implode(",",array_keys($field)).")VALUES";
$sql.="('".implode("','",array_values($field))."')";
//echo $sql;

$ret=mysqli_query($this->dbh,"$sql");
	return $ret;


}



//Data read Function
public function fetchdata($table)
	{

		$sql="SELECT * From $table";		
		$result=mysqli_query($this->dbh,"$sql");

	return $result;
}


//Data one record read Function
public function fetchonerecord($table,$field)
	{	
		
		$sql="SELECT * FROM $table WHERE ";

		$sql.=implode(" ",array_keys($field))."=";
		

		$sql.=implode("",array_values($field));
//		echo $sql;
		
		$ret=mysqli_query($this->dbh,"$sql");
			return $ret;

	}

//Data updation Function
public function update($table,$post,$userid)
	{
		
$sql="UPDATE $table set ";
		foreach($_POST as $key=>$value){
		
		if($key!=array_key_last($_POST))
		 $sql.=$key."='".$value."',";}

		 $sql=substr($sql,0,-1);

 $sql.=" WHERE id=$userid";

$update=mysqli_query($this->dbh,"$sql");
			
		return $update;
		

}
//Data Deletion function Function
public function delete($table,$field)
	{

		
		$sql="DELETE FROM $table WHERE";
		$sql.=implode(" ",array_keys($field))."=";
		$sql.=implode("",array_values($field));
		//echo $sql;
		
		$ret=mysqli_query($this->dbh,"$sql");
			return $ret;

	}
}
?>*/
