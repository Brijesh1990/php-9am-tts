<!-- 
include is a function 
include is used to re-used code one page to another page

types of include function 
 a) include()
     reused code one page to another page but same file included more than once time using include
     Note : if we include wrong file it will be generated warning errors but rest of code of script is executed continue.

     <?php  
      include("about.php");
      include("about.php");
     ?>
      
 b) include_once()
     reused code one page to another page but same file included only once time in a code using include_once
     Note : if we include wrong file it will be generated warning errors but rest of code of script is executed continue.

     <?php  
      include_once("about.php");
      include_once("about.php");
     ?>
 c) require()

     reused code one page to another page but same file included more than once time using require
     Note : if we include wrong file it will be generated fatal errors but rest of code of script is stopped to executed continue.

     <?php  
      require("about.php");
      require("about.php");
     ?>
 d) require_once()

     reused code one page to another page but same file included only once  time using require_once()
     Note : if we include wrong file it will be generated fatal errors but rest of code of script is stopped to executed continue.

     <?php  
      require_once("about.php");
      require_once("about.php");
     ?>

-->