<?php

function connectWithDb(){
      // my db credentials
      $hostname = "localhost"; // locatie van de sql server
      $dbUser = "admintakehome"; // username om in te loggen
      $dbPassword = "webfundamentalsisleuk"; // password om in te loggen
      $dbName = "takehome";
      $port = 8889; // 3306 - default
  
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
    function insertQuery(){
         // make connection with db
         $conn = connectWithDb();  
         // create sql statement
      
 
         // fetc the result
         $result = mysqli_query($conn,$sql);
 
         return $result ;
 
 
 
    };
    //