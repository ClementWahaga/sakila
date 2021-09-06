<?php
class database extends Pdo{

  protected $connection = null;

  #creation de la connection
  public function __construct($hostname,$dbname,$username,$password){
    try {
        # MySQL with PDO_MYSQL  
        $this->connection = new PDO('mysql:host=localhost;dbname=sakila', $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch (PDOException $e) {
        $this->connection = null;
        print "Erreur, vous avez etait deconnecté !: " . $e->getMessage() . "<br/>";
        return false;
    }
  }
}
?>
    

