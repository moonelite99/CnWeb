<?php        
class Hello {        
  function sayHello()        
  {        
    return 'Hello World!';        
  }        
}
class Goodbye extends Hello {        
    function sayGoodbye()        
    {        
      return 'Goodbye World!';        
    }        
  }
  $msg = new Goodbye();
        
  echo $msg->sayHello() . '<br />';        
  echo $msg->sayGoodbye() . '<br />';        
  ?>