<?php

    // configuration
    require("../includes/config.php"); 
    
    // query all the workouts of a user
    // store them into positions to pass to workoutview_display
    $rows = CS50::query("SELECT * FROM workouts WHERE user_id = ?", $_SESSION["id"]);
    if ($rows == false)
    {
        apologize("You don't have any workouts");
    }
    $positions = [];
    foreach ($rows as $row)
    {
        $positions[] = [
            "workout_name" => $row["workout_name"],
            "description" => $row["description"],
            "intensity" => $row["intensity"]
        ];
    }
    
    // query the user's name
    $name = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    if ($name == false)
    {
        apologize("There was an error");
    }
    $name = $name[0]["username"];
    render("workoutview_display.php", ["title" => "Display", "positions" => $positions, "name" => $name]);
?>