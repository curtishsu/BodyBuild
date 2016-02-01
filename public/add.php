<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // query all of the users workouts
        $workouts = CS50::query("SELECT * FROM workouts WHERE user_id = ?", $_SESSION["id"]);
        if ($workouts == false)
        {
            apologize("You have no workouts");
        }
        
        // store them into workoutlist
        $workoutlist = [];
        foreach($workouts as $workout)
        {
            $workoutlist[] = [
            "workout_name" => $workout["workout_name"]    
            ];
        }
        
        // query all of the exercises
        $exercises = CS50::query("SELECT * FROM exercises");
        if ($exercises == false)
        {
            apologize("No exercises");
        }
        
        // store them in exerciselist
        $exerciselist = [];
        foreach($exercises as $exercise)
        {
            $exerciselist[] = [
            "exercise_name" => $exercise["exercise_name"]   
            ];
        }
        render("add_form.php", ["workoutlist" => $workoutlist,"exerciselist" =>$exerciselist, "title" => "Add"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query the exercise the user requested
        // store the exercise name and id
        $exercise_id = CS50::query("SELECT * FROM exercises WHERE exercise_name = ?",$_POST["exercises"]);
        if($exercise_id == false)
        {
            apologize("This isn't a valid exercise");
        }
        $exercise_id = $exercise_id[0]["exercise_id"];
        
        // query the workout the user selected and store into the name and id
        $workout_id = CS50::query("SELECT * FROM workouts WHERE workout_name = ? AND user_id = ?", $_POST["workouts"], $_SESSION["id"]);
        if($workout_id == false)
        {
            apologize("None of your workouts say this");
        }
        $workout_name = $workout_id[0]["workout_name"];
        $workout_id = $workout_id[0]["workout_id"];
        
        // Insert the routine into the database
        $routine = CS50::query("INSERT INTO routine (workout_id, exercise_id, numsets, reps) VALUES (?,?,?,?)", $workout_id, $exercise_id, $_POST["sets"], $_POST["reps"]);
        if ($routine == false)
        {
            apologize("Sorry there was a failure");
        }
        
        // query the workout and store them into positions to be displayed in routine_display
        $rows = CS50::query("SELECT * FROM routine WHERE workout_id = ?", $workout_id);
        $positions = [];
        foreach ($rows as $row)
        {
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
                "muscle" => $muscle,
                "description" => $description
            ];
        }
        render("routine_display.php", ["positions" => $positions, "workout_name" => $workout_name, "title" => $workout_name]);
    }
?>