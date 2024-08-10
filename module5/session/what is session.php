what is session  ? 

   session is a super global variables 
   session stored data on server side.
   session is used to stored a temporary data one page to another page on server side.


   session is used some function 

   a) how to start session on page 
     
      session_start();

   b) how to retrieve or stored  data in session 

       $_SESSION["id"];
       
       $_SESSION["name"];
       
       $_SESSION["email"];

    c) how to unset or remove session particular from page 
    
      unset($_SESSION["id"]);
      unset($_SESSION["name"]);
      unset($_SESSION["email"]);


    d) how to destroy session 

        session_destroy();
        
