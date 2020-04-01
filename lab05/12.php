<?php         
/**         
 * A standard header for a Web page         
 */         
class StandardHeader {         
  /**         
   * The header HTML is stored here         
   */         
  var $header = '';         
         
  /**         
   * The constructor, taking the name of the page         
   */         
  function StandardHeader($title)         
  {         
    $html = <<<EOD
<html>         
<head>         
<title> $title </title>         
</head>         
<body>         
<h1>$title</h1>         
EOD;         
    $this->setHeader($html);         
  }         
         
  /**         
   * General method for adding to the header         
   */         
  function setHeader($string)         
  {         
    if (!empty($this->header)) {         
      $this->header .= $string;         
    } else {         
      $this->header = $string;         
    }         
  }         
         
  /**         
   * Fetch the header         
   */         
  function getHeader()         
  {         
    return $this->header;         
  }         
}
/**         
 * Subclass for dealing with Categories, building a breadcrumb         
 * menu         
 */         
class CategoryHeader extends StandardHeader {         
    /**         
     * Constructor, taking the category name and the pages base URL         
     */         
    function CategoryHeader($category, $baseUrl)         
    {         
      // Call the parent constructor         
      parent::StandardHeader($category);         
           
      // Build the breadcrumbs         
      $html = <<<EOD
  <p><a href="$baseUrl">Home</a> >         
  <a href="$baseUrl?category=$category">$category</a></p>         
  EOD;         
      // Call the parent setHeader() method         
      $this->setHeader($html);         
    }         
  }
  // Set the base URL         
$baseUrl = '12.php';         
         
// An array of valid categories         
$categories = array('PHP', 'MySQL', 'CSS');         
         
// Check to see if we're viewing a valid category         
if (isset($_GET['category']) &&         
    in_array($_GET['category'], $categories)) {         
         
  // Instantiate the subclass         
  $header = new CategoryHeader($_GET['category'], $baseUrl);         
} else {         
         
  // Otherwise it's the home page. Instantiate the Parent class         
  $header = new StandardHeader('Home');         
}         
         
// Display the header         
echo $header->getHeader();         
?>         
<h2>Categories</h2>         
<p><a href="<?php echo $baseUrl; ?>?category=PHP">PHP</a></p>         
<p><a href="<?php echo $baseUrl; ?>?category=MySQL">MySQL</a></p>         
<p><a href="<?php echo $baseUrl; ?>?category=CSS">CSS</a></p>         
</body>         
</html>