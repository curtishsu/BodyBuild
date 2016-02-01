<h3>Add To A Workout</h3>
<form action="add.php" method="post" onsubmit = "return validateadd()">
    <fieldset>
        <div class="form-group">
            <select name = "workouts" id = "workouts" Required>
            <option value="0">Select a workout</option>
            <!--loop through all the workout names-->
            <?php
                    foreach($workoutlist as $element)
                    {
                        echo '<option value="'. $element["workout_name"] .'">'. $element["workout_name"] .'</option>';
                    }
            ?>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" id = "sets" name="sets" placeholder="Sets" type="number" style="width: 80px" Required/>
            x
            <input class="form-control" id = "reps" name="reps" placeholder="Reps" type="number" style="width: 80px" Required/>
            <select name = "exercises" id = "exercises" Required>
                <option value="0">Select an exercise</option>
                <!--loop through all the exercises-->
                <?php
                    foreach($exerciselist as $exercise)
                    {
                        echo '<option value="'. $exercise["exercise_name"] .'">'. $exercise["exercise_name"] .'</option>';
                    }
            ?>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Add!
            </button>
        </div>
    </fieldset>
</form>
