<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>play</title>    
    <link rel="stylesheet" href="assets/css/index.css" type="text/css">

</head>
    <body>
        <div class="content">
            <h1>
                <?php
                
                    include "assets/includes/db.php";
                    $users=getQuery("SELECT * FROM `users` WHERE userId LIKE '1'");
                    foreach($users as $user)
                    {

                
                    echo $user["firstname"];

                
                     }
                ?>
            </h1>

   

        
           
               
            
            <div class="img_user">
                <img src="assets/images/userHead.png" alt="userhead" >
            </div>

            <div class="user_gegevens">
                <p><?php echo$user["gender"];?></p>
                <p><?php echo$user["description"];?></p>
            </div>
            <br/>
            <form class="game_buttons" action="assets/controllers/add_house.php" method="POST">
                <div>
                    <button type="submit" value="Gryffindor" name="house" class="knop_houses">Gryffindor</button>
                    <button type="submit" value="Ravenclaw" name="house" class="knop_houses">Ravenclaw</button>
                </div>
                <div>
                    <button type="submit" value="Slytherin" name="house" class="knop_houses">Slytherin</button>
                    <button type="submit" value="Hufflepuff"  name="house" class="knop_houses">Gryffindor</button>
                </div>
            </form>

            




        </div>
    </body>
</html>