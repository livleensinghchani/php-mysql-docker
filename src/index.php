<?php
//***************************************** */
//  Landing Page for the server!

//  This is the file that will be served 
//  by the server by default!

//  Default serving address is 8000
//  Port 80

//  Refer to //LINK - docker-compose.yml 
//***************************************** */

  include __DIR__."/dbconnect.php";

  ob_start();
  echo"<h1>HEY USER</h1>";
  ob_end_flush();