<?php
                include "../includes/db.php";

               
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];

                $gender = $_POST["gender"];

                $description = $_POST["description"];
               
                


                if($firstname != null && $lastname != null && $gender != null && $description != null ){
                   
                    insertQuery("INSERT INTO users (firstname, lastname, gender, description) VALUES ('$firstname','$lastname','$gender', '$description')");
                    header('Location: https://sortinghat.vrijmoed17.be/aangemeld.php');

                }
