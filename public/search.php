<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("search_form.php", ["title" => "Search"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["muscle"] == "0")
        {
            apologize("Please give a muscle group");
        }
        // query all the exercises that work the muscle the user selected
        $rows = CS50::query("Select * FROM exercises WHERE muscle = ?", $_POST["muscle"]);
        if ($rows == false)
        {
            apologize("No workouts with this attribute");
        }
        
        // store the values of each exercise in positions to pass to search_results
        $positions = [];
        foreach ($rows as $row)
        {
            $positions[] = [
                "name" => $row["exercise_name"],
                "muscle" => $row["muscle"],
                "weights" => $row["weights"],
                "description" => $row["description"],
                "link" => $row["link"]
            ];
        }
        
    }
    render("search_results.php", ["positions" => $positions, "title" => "Results","muscle" => $_POST["muscle"]]);
?>