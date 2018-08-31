<?php 
	class MySQLDatabase{
		private $con;
		function __construct(){
			$this->open_con();
		}
		public function open_con(){
			$this->con=mysql_connect('localhost','root','')or die("Unable to connect to database!") ;
			$db_select=mysql_select_db('db_bankexamination',$this->con) or die("Database selection failed!") ;
		}
		public function query($sql){
			$result=mysql_query($sql) or die ("Database query failed!".mysql_error());
			return $result;
		}
		public function fetch_array($result_set){
			return mysql_fetch_array($result_set);
		}
	}
	$database=new MySQLDatabase();
?>