<?php
      include "../includes/db.php";
      $id = $_POST["userId"]; 

      /* hierin komt de code voor het populaten van de database ik heb nodig de id van de persoon en de naam van het huis */
      $users = getQuery("SELECT * FROM `users` WHERE userId LIKE '1'");
     
                    foreach($users as $user)
                    {

                
                    $id= $user["userId"];
                    $id = $_POST["userId"]; 
                    var_dump($id);
              
                    $housnumber = $_POST["house"];

                
                     }
     

    



    


      

  

      
      
      


      if($housname != null && $userId != null ){
          echo "excecute to db";
          insertQuery("INSERT INTO `votes`(`userId`, `house`) VALUES ('$id', '$housname')");
          header('Location: https://sortinghat.vrijmoed17.be/uitkomst.php');

      }

                
        