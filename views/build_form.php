<h3>Build A New Workout</h3>
<form action="build.php" method="post" onsubmit="return validatebuild()">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="workout_name" id = "workout_name" placeholder="Create a name for your workout" size = "35" type="text" Required/>
        </div>
        <div class ="form-group">
            <select name="intensity" id="intensity" Required>
                <option value = "0" selected="selected">Intensity?</option>
                <option value ="Low">Low</option>
                <option value ="Medium">Medium</option>
                <option value ="High">High</option>
            </select>
        </div>
        <p>Give a quick description of your new workout</p>
        <textarea name="description" id="description" rows="10" cols="40" maxlength = "255" Required>
        </textarea>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Create!
            </button>
        </div>
    </fieldset>
</form>

Add to an old workout <a href="add.php">here</a> or search for an exercise <a href="search.php">here</a>