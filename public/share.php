<?php

    // configuration
    require("../includes/config.php"); 

    // if reached via get   
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("share_form.php", ["title" => "Share"]);
    }
    
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check to see if all fields were filled
        if (empty($_POST["name"]))
        {
            apologize("What's the name of your workout?");
        }
        else if (empty($_POST["muscle"]))
        {
            apologize("What muscle does your workout train?");
        }
        else if (empty($_POST["description"]))
        {
            apologize("Please provide a description");
        }
        else if (empty($_POST["weights"]))
        {
            apologize("Please tell us if we need weights");
        }
        else
        {
            // Lower case the exercise name and upper case the first letter for uniformity
            $name = strtolower($_POST["name"]);
            $name = ucfirst($name);
            
            // check to see if the exercise exists. If so, apologize. If not, add it into exercises
            $check = CS50::query("SELECT * FROM exercises WHERE exercise_name = ?", $name);
            if ($check == false)
            {
                CS50::query("INSERT INTO exercises (exercise_name, muscle, description, weights, link) VALUES (?,?,?,?,?)",$name,$_POST["muscle"],$_POST["description"], $_POST["weights"],$_POST["link"]);
            }
            else
            {
                apologize("Workout already exists");
            }
        }
    }
    render("thankyoushare.php", ["title" => "Thank you!"]);
    
?>