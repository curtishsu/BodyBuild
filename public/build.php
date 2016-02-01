<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("build_form.php", ["title" => "Build"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check to ensure that each field was filled in 
        if (empty($_POST["workout_name"]))
        {
            apologize("Please give us a workout name");
        }
        else if (empty($_POST["intensity"]))
        {
            apolgoize("Please give us an intensity");
        }
        else if (empty($_POST["description"]))
        {
            apologize("Please give a descrtiption");
        }
        
        // Test to see if the user already make a workout of the same name. If so, don't allow them to make it again
        // Insert the workout into the database
        $exist = CS50::query("SELECT * FROM workouts WHERE workout_name = ? AND user_id = ?", $_POST["workout_name"], $_SESSION["id"]);
        if ($exist != false)
        {
            apologize("Sorry you already made a workout with this name");
        }
        $name = CS50::query("INSERT IGNORE INTO workouts (user_id, workout_name, intensity, description) VALUES(?,?,?,?)", $_SESSION["id"], $_POST["workout_name"], $_POST["intensity"], $_POST["description"]);
        if ($name == false)
        {
            apologize("Sorry the workout name is already taken");
        }
    }
    redirect("search.php");
?>
        
    