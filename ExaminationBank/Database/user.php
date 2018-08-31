<?php 
	require_once("database.php");
	class Search{
		public static function search_all($sql){
			return self::search_by_sql($sql);
		}
		public static function search_by_sql($sql){
			global $database;
			$result_set=$database->query($sql);
			$object_array=array();
			while($row=$database->fetch_array($result_set)){
				$object_array[]=self::instantiate($row);
			}
			return $object_array;
		}
		public static function instantiate($record){
			$object=new self;
			foreach($record as $attribute=>$value){
				$object->$attribute=$value;
			}
			return $object;
		}
		public static function find_id($sql){
			global $database;
			$result_array=self::search_by_sql($sql);
			return !empty($result_array) ? array_shift($result_array) : false;
		}
		
		public static function get_num($sql){
			$query=mysql_query($sql);
			$num=mysql_num_rows($query);
			return $num;
		}
	}
?>