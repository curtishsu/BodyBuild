<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // check to make sure confirmation password equals password, otherwise apologize
        if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Passwords must match");
        }
        // insert the new user into the database. If the username is already taken, however, apologize
        // save the id into $_SESSION for future use
        else
        {
            $result = CS50::query("INSERT IGNORE INTO users (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            if ($result == false)
            {
                apologize("Username already taken");
            }
            $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("index.php");   
        }
    }


?>