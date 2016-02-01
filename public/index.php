<?php

    // configuration
    require("../includes/config.php"); 
    
    // query the users id and name
    $name = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    $name = $name[0]["username"];

    // render home
    render("home.php", ["name" => $name, "title" => "Home"]);

?>
