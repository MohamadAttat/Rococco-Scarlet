<?php
class Database
{
  private static $instance = null;
  private $connection;

  private $host = 'localhost';
  private $port = 3306;
  private $dbname = 'scarlet_db';
  private $username = 'root';
  private $password = '';

  private function __construct()
  {
    try {
      $this->connection = new PDO(
        "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8",
        $this->username,
        $this->password
      );
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("DB connection failed: " . $e->getMessage());
    }
  }

  public static function getInstance(): Database
  {
    if (self::$instance === null) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection(): PDO
  {
    return $this->connection;
  }
}
