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
                
                    include "assets\includes\db.php";
                    $users=getQuery("SELECT * FROM `users` WHERE userId LIKE '1'");
                    foreach($users as $user)
                    {

                
                    echo $user["firstname"];

                
                     }
                ?>
            </h1>

   

        
            <div>
                <h1>
                    
                </h1>
            </div class="user_gegevens">
            <div class="img_user">
                <img src="assets/images/userHead.png" alt="" srcset="">
            </div>

            <div>
                <p><?php echo$user["gender"];?></p>
                <p><?php echo$user["description"];?></p>
            </div>
            <br/>
            <form class="game_buttons"action="">
                <div>
                    <input type="submit" value="Gryffindor" name="Gryffindor" class="knop_houses">
                    <input type="submit" value="Slytherin" name="Slytherin" class="knop_houses">
                </div>
                <div>
                    <input type="submit" value="Ravenclaw" name="Ravenclaw" class="knop_houses">
                    <input type="submit" value="Hufflepuff"  name="Hufflepuff" class="knop_houses">
                </div>
            </form>

            <div>
                <button class="knop">
                    next person
                </button>
            </div>

            




        </div>
    </body>
</html>