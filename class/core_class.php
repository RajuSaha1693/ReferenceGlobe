<?php
	if( !isset( $_SESSION ) ){
		session_start();
	}
	/*------------Config-------------------*/
	class Config{
		static $confArray;
		public static function read( $name ){
			return self::$confArray[$name];
		}
		public static function write( $name,$value ){
			self::$confArray[$name] = $value;
		}
	}
	define("ROW_PER_PAGE",10);
	Config::write('db.user','root');
	Config::write('db.password','');

	/*------------Core-------------------*/
	class Core{
		public $dbh;
		private static $instance;
		public function __construct(){
			$dsn = "mysql: host=localhost;dbname=referenceglobe_db";
			$user = Config::read('db.user');
			$password = Config::read('db.password');
			$this->dbh = new PDO($dsn,$user,$password);	
		}
		/*------------Instance-------------------*/
		public static function getInstance(){
			if( !isset(self::$instance) ){
				$object = __CLASS__;
				self::$instance = new $object;
			}
			return self::$instance;
		}
	}
?>
