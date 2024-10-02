<?php
class Conn
{
	public $conn;
	public $s;
	public $u;
	public $c;
	public $err_conn = "No pudo conectarse";

	function __construct() {
		//$this->conn = mysql_connect($this->getVConn('s'), $this->getVConn('u'), $this->getVConn('p')) or die ($this->err_conn());
		//mysql_select_db($this->getDB(), $this->conn);
		
		$this->conn = pg_connect("host=".$this->getVConn('s')." port='".Gral::getConfig('bd_puerto')."' user=".$this->getVConn('u')." password=".$this->getVConn('p')." dbname=".$this->getDB());
		//$this->conn = pg_connect("host=localhost port=5432 user=postgres password=p123456 dbname=test");

	}
	
	public function getVConn($caso){
		switch($caso){
			case "s": $var = Gral::getConfig('bd_servidor'); break;
			case "u": $var = Gral::getConfig('bd_usuario'); break;
			case "p": $var = Gral::getConfig('bd_clave'); break;
		}
		return $var;
	}

	public function getDB(){
		return Gral::getConfig('bd_base');
	}
	
	public function getConn(){ return $this->conn; }
	
}
//$conn = new Conn();
?>