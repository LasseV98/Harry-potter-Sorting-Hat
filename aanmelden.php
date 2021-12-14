<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aanmelden</title>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css">
</head>
        <body>
            <div class="content">
                <div>
                    <h1 class="Title_aanmelden">
                        Create account
                    </h1>
                </div>
                
            <form action="./add.php" method="Post">
                <label for="firstname"> Firstname</label>
                <br/>
                <input type="text" id="firstname" name="firstname" placeholder="enter Firstname">
                <br/>

                <label for="username">Lastname</label>
                <br/>

                <input type="text" id="lastname" name="lastname" placeholder="enter lastname">
                <br/>

                <label for="gender">gender</label>
                <br/>
                <input type="text" id="gender" name="gender" placeholder="enter gender">
                <br/>

                <label for="description">description</label>
                <br/>

                <input type="text" id="desciription" name="discription" placeholder="enter discripton">
                <br/>

                <input type="submit" value = "create user" class="button">
            </form>
                            <!--button-->

                            

                <div class="button">
                    <button class="knop">
                        create account
                    </button> 
                      
                </div>   
                <div class="foto_aanmelden">
                    <img class="img_aanmelden" src="assets/images/gif_aanmelden.gif" alt="aanmelden" >
                </div>
            </div>                
        </body>
</html>