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
            <div class="content  ">
                <div>
                    <h1 class="Title_aanmelden">
                        Create account
                    </h1>
                </div>

                <div class="form">
                        <form action="add.php" method="POST">
                            <!--FIRSTNAME-->
                            <label for="firstname">
                                <span class="label">Firstname*</span>
                            </label>
                            <br/>
                            <input class="input_field" type="text" id="firstname" name="firstname" placeholder="Geef je voornaam in" required/>
                            <br/>
                            <br/>

                            <!--LASTNAME-->
                            <label for="lastname">
                                <span class="label">Lastname*</span>
                            </label>
                            <br/>
                            <input class="input_field" type="text" id="lastname" name="lastname" placeholder="Geef je (achter)naam in" required/>
                            <br/>
                            <br/>
                            <!--GENDER-->
                            <label for="male">
                                <span class="label"> chose youre gender*</span>
                            </label>
                            <br/>
                            <input type="radio" id="woman" name="usergender" value="woman" checked/>
                            <label for="woman">
                                <span class="keuze">Woman</span>
                            </label>
                            <br/>
                            <input type="radio" id="male" name="usergender" value="male"/>
                            <label for="male">
                                <span class="keuze">Male</span>
                            </label>
                            <br/>
                            <input type="radio" id="other" name="usergender" value="other"/>
                            <label for="other">
                                <span class="keuze">Other</span>
                            </label>
                            <br/>
                            <br/>

                            <!--Vertel wat over jezelf-->
                            <label for="comment">
                            <span class="label">Something you loved</span>
                            </label>
                            <br/>
                            <input class="input_field" type="text" id="description" name="discription" placeholder="what you loved the most" required/>
                                                                                                                            
                            <!--SUBMIT BUTTON-->
                           
                            <input class = "knop_createNewMember" type="submit" value="Create account!"/>
                            <br/>
                        </form>
                    </div>
                                    

               
                    
                      
                </div>   
                <div class="foto_aanmelden">
                    <img class="img_aanmelden" src="assets/images/gif_aanmelden.gif" alt="aanmelden" >
                </div>
            </div>                
        </body>
</html>