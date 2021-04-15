<?php
class DB{
	private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO("sqlsrv:server=DESKTOP-L0PL56H\MSSQLSERVER,1433;Database=MusicAppWebProgramming;ConnectionPooling=0");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
	}
}
?>
