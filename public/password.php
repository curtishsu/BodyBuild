<?php

    // configuration
    require("../includes/config.php");
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("password_form.php", ["title" => "Register"]);
    } 
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check to make sure username is filled, otherwise apologize
        if (empty($_POST["username"]))
        {
            apologize("You must produce a username");
        }
        // check to make sure they fill in the old password, otherwise apologize
        else if (empty($_POST["oldpassword"]))
        {
            apologize("You must produce a password");
        }
        // check to see if new password was filled, otherwise apologize
        else if (empty($_POST["newpassword"]))
        {
            apologize("You must produce a password");
        }
        // check to see if the confirmation password was filled, otherwise apologize
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must produce a password");
        }
        
        // check to see if the two new passwords given were equal, otherwise apologize
        else if ($_POST["newpassword"] != $_POST["confirmation"])
        {
            apologize("Passwords must match");
        }
        else
        {
            $userstats = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
            $username = $userstats[0]["username"];
            
            // check username for correctnes
            if ($username != $_POST["username"])
            {
                apologize("Wrong username");
            }
            // check old password for correctness
            else if (!password_verify($_POST["oldpassword"], $userstats[0]["hash"]))
            {
                apologize("Wrong original password");
            }
            else
            {
                // update password
                CS50::query("UPDATE users SET hash=? where id =?", password_hash($_POST["newpassword"], PASSWORD_DEFAULT), $_SESSION["id"]);
                redirect("index.php");
            }
        }
    }

?>