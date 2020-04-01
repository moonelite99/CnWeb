<?php          
// Include the MySQL database connection class          
// require_once 'Database/MySQL.php';          
          
// A class which aggregates the MySQL class          
class Articles {          
  var $db;          
  var $result;          
  // Accept an instance of the MySQL class          
  function Articles($db)          
  {          
    // Assign the object to a local member variable          
    $this->db = $db;          
    $this->readArticles();          
  }          
  function readArticles()          
  {          
    // Perform a query using the MySQL class          
    $sql = "SELECT * FROM test.user LIMIT 0,5";          
    $this->result = $this->db->query($sql);          
  }          
  function fetch()          
  {          
    return ($this->result)->fetch_assoc();          
  }          
}          
          
// Create an instance of the MySQL class          
$db = new mysqli('localhost', 'root', '', 'test');          
          
// Create an instance of the Article class, passing it the MySQL          
// object          
$articles = new Articles($db);          
          
while ($row = $articles->fetch()) {          
  echo '<pre>';          
  print_r($row);          
  echo '</pre>';          
}          
?>