<?php

function connectWithDb(){
      // my db credentials
      $hostname = "ID328544_SortingHat21.db.webhosting.be";// locatie van de sql server
      $dbUser = "ID328544_SortingHat21"; // username om in te loggen
      $dbPassword = "WebfundIes21"; // password om in te loggen
      $dbName = "ID328544_SortingHat21";
      $port = 3306; // 3306 - default
  
      $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $port);
  
      if ($conn == false){
          die ("connetion failed");
      }
      return $conn;

}

function dbClose ($conn)
{
    $conn->close();
}
    function getQuery($sql){
        // make connection with db
        $conn = connectWithDb();  
        // create sql statement
     

        // fetc the result
        $result = mysqli_query($conn,$sql);

        return $result ->fetch_all(MYSQLI_ASSOC);



    }
    function insertQuery($sql){
         // make connection with db
         $conn = connectWithDb();  
         // create sql statement
      
 
         // fetc the result
         $result = mysqli_query($conn,$sql);
 
         return $result ;
 
 
 
    }
    