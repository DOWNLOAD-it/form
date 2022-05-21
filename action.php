<?php

    if(isset($_POST["submit"]))
    {
        if(isset($_POST["username"]) AND isset($_POST["userid"]) AND isset($_POST["userdd"]) AND isset($_POST["userda"]) AND isset($_POST["pension"]) AND isset($_POST["room"]) AND isset($_POST["country"]) )
        {
            if(!empty($_POST["username"]) AND !empty($_POST["userid"]) AND !empty($_POST["userdd"]) AND !empty($_POST["userda"]) AND !empty($_POST["pension"]) AND !empty($_POST["room"]) AND !empty($_POST["country"]))
            {
                $NAME =htmlspecialchars($_POST["username"]);
                $CIN =htmlspecialchars($_POST["userid"]);
                $DATEDEP =htmlspecialchars($_POST["userdd"]);
                $DATEAR =htmlspecialchars($_POST["userda"]);
                $PENSION =htmlspecialchars($_POST["pension"]);
                $ROOM =htmlspecialchars($_POST["room"]);
                $COUNTRY =htmlspecialchars($_POST["country"]);
                  

                 echo "
                 Username : $NAME <br/><br/><br/>
                 User id  : $CIN <br/><br/><br/>
                 User coming date : $DATEDEP <br/><br/><br/>
                 User going date : $DATEAR <br/><br/><br/>
                 Pension type : $PENSION <br/><br/><br/>
                 Room type : $ROOM <br/><br/><br/>
                 User country : $COUNTRY <br/><br/><br/>";
            }
        }
    }
?>