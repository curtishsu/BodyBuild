<h3 style="padding: 10px 10px 10px 10px">See One Of Your Workouts</h3>
<form action="workoutsearch.php" method="post" onsubmit = "return validateworkoutsearch()">
    <fieldset>
        <div class="form-group">
            <select name = "workouts" id = "workouts" Required>
            <option value="0">Select a workout</option>
            <?php
                    foreach($workoutlist as $element)
                    {
                        echo '<option value="'. $element["workout_name"] .'">'. $element["workout_name"] .'</option>';
                    }
            ?>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Search!
            </button>
        </div>
    </fieldset>
</form>
