<h3> Search </h3>
<form action="search.php" method="post" onsubmit = "return validatesearch()">
    <fieldset>
        <div class ="form-group">
            <select name="muscle" id="searchmuscle" Required>
                <option value = "0" selected="selected">What muscle are you training?</option>
                <option value ="Abdominals">Abdominals</option>
                <option value ="Biceps">Bicep</option>
                <option value ="Calves">Calves</option>
                <option value ="Chest">Chest</option>
                <option value ="Glutes">Glutes</option>
                <option value ="Lats">Lats</option>
                <option value ="Lower back">Lower Back</option>
                <option value ="Quads">Quadriceps</option>
                <option value ="Triceps">Triceps</option>
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