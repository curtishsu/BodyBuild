<?php

    // configuration
    require("../includes/config.php"); 
    // if reached via get   
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // query all of the users workouts and store them into workoutlist
        $workouts = CS50::query("SELECT * FROM workouts WHERE user_id = ?", $_SESSION["id"]);
        if ($workouts == false)
        {
            apologize("You have no workouts");
        }
        $workoutlist = [];
        foreach($workouts as $workout)
        {
            $workoutlist[] = [
            "workout_name" => $workout["workout_name"]    
            ];
        }
        render("workoutsearch_form.php", ["workoutlist" => $workoutlist, "title" => "Search"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // ensure the fields are filled in
        if(empty($_POST["workouts"]))
        {
            apologize("Please fill in all fields");
        }
        // query the workout the user selected
        // store the workouts name and id
        $workout_id = CS50::query("SELECT * FROM workouts WHERE workout_name = ? AND user_id = ?", $_POST["workouts"], $_SESSION["id"]);
        if($workout_id == false)
        {
            apologize("None of your workouts say this");
        }
        $workout_name = $workout_id[0]["workout_name"];
        $workout_id = $workout_id[0]["workout_id"];
        
        // query all the exercises of a certain workout
        $rows = CS50::query("SELECT * FROM routine WHERE workout_id = ?", $workout_id);
        $positions = [];
        foreach ($rows as $row)
        {
            // query the information about each exercise and store into positions
            $exercise_name = CS50::query("SELECT * FROM exercises WHERE exercise_id = ?", $row["exercise_id"]);
            if ($exercise_name == false)
            {
                apologize("Sorry there was a failure");
            }
            $muscle = $exercise_name[0]["muscle"];
            $description = $exercise_name[0]["description"];
            $exercise_name = $exercise_name[0]["exercise_name"];
            $positions[] = [
                "sets" => $row["numsets"],
                "reps" => $row["reps"],
                "exercise" => $exercise_name,
                "description" =>$description,
                "muscle" => $muscle
            ];
        }
        render("routine_display.php", ["positions" => $positions, "workout_name" => $workout_name, "title" => $workout_name]);
    }
?>