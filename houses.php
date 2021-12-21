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
        <div>
            <h1>
                <?php
                include "assets\includes\db.php";
                $users=getQuery("SELECT * FROM `users` WHERE userId LIKE '5'");
                foreach($users as $user){
                ?>
                <?php echo $user["firstname"];?>
        <?php
                }
        ?>
            </h1>
        </div>
     
        <div class="user_picture">
            <img src="assets/images/userHead.png" alt="picture" >
        </div>

        <div class="info">
            <?php
        foreach($users as $user){
            ?>
            <h2> <?php echo $user["gender"];?></h2>
            <h2><?php echo $user["description"];?></h2>
            <?php
                }
        ?>
        </div>
         
        
        <!--buttons in een tabbel steken in een 2x2 matrix-->
        <div>
            <table>
                <tr>
                    <td>
                        <button class="button_house">
                            Gryffindor
                        </button>
                    </td>
                    <td>
                        <button class="button_house" >
                            slytherin
                        </button>
                    </td>
                </tr>
                <td>
                        <button class="button_house">
                            Ravenclaw
                        </button>
                    </td>
                    <td>
                        <button class="button_house">
                            Huffepuff
                        </button>
                    </td>
            </table>    

        </div>
      
    </div>
</body>
</html>