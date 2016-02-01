/**
 * scripts.js
 *
 * Computer Science 50
 * Final Project
 *
 * Global JavaScript, if any.
 */
function registervalidate()
{
    var user = document.getElementById("username").value;
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("confirmation").value;
    
    if (user  == "")
    {
        alert("Username must be filled in");
        return false;
    }
    else if(pass1 == "" || pass2=="")
    {
        alert("Password fields should be filled");
        return false;
    }
        
    else if (pass1.localeCompare(pass2) != 0)
    {
        alert("Passwords don't match!!!");
        return false;
    }
    return true;
}
function validatebuild()
{
    var name = document.getElementById("workout_name").value;
    var intensity = document.getElementById("intensity").value;
    var description = document.getElementById("description").value;
    if (name == "")
    {
        alert("Please fill out the name of the workout");
        return false;
    }
    else if (intensity == "0")
    {
        alert("Please fill out intensity");
        return false;
    }
    else if (description == "")
    {
        alert("Please fill out description");
        return false;
    }
    return true;
}

function validatesearch()
{
    var search = document.getElementById("searchmuscle").value;
    if (search == "0")
    {
        alert("Please pick a muscle group");
        return false;
    }
    return true;
}

function validateadd()
{
    var exercise = document.getElementById("exercises").value;
    var workout = document.getElementById("workouts").value;
    var reps = document.getElementById("reps").value;
    var sets = document.getElementById("sets").value;
    if (exercise == "0" || workout == "" || reps == "" || sets == "")
    {
        alert("Fill in all fields");
        return false;
    }
    else if (reps <= 0 || sets <= 0)
    {
        alert("Reps and Sets must both be positive numbers");
        return false;
    }
    return true;
}

function validateshare()
{
    var name = document.getElementById("name").value;
    var muscle = document.getElementById("muscle").value;
    var weight = document.getElementById("weights").value;
    var desc = document.getElementById("description").value;
    if (name == "" || muscle == "0" || desc == "" || weight =="0")
    {
        alert("Please fill in all fields (link is optional)");
        return false;
    }
    return true;
}

function validateworkoutsearch()
{
    var workout = document.getElementById("workouts").value;
    if (workout == "0")
    {
        alert("What workout do you want to see");
        return false;
    }
    return true;
}

function validatechangepassword()
{
    var username = document.getElementById("username").value;
    var oldpassword = document.getElementById("oldpassword").value;
    var newpassword = document.getElementById("newpassword").value;
    var confirmation = document.getElementById("confirmation").value;
    if (username =="" || oldpassword =="" || newpassword=="" || confirmation =="")
    {
        alert("Please fill out all fields");
        return false;
    }
    else if (newpassword != confirmation)
    {
        alert("New passwords do not match");
        return false;
    }
    return true;
}