<h3>Have A Brilliant Exercise? Add It To Our Database</h3>
<form action="share.php" method="post" onsubmit = "return validateshare()">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" id = "name" name="name" placeholder="Exercise Name" type="text" Required/>
        </div>
        <div class ="form-group">
            <select name="muscle" id="muscle" Required>
                <option value = "0" selected="selected">What muscle are you training?</option>
                <option value ="Abdominals">Abdominals</option>
                <option value ="Biceps">Biceps</option>
                <option value ="Calves">Calves</option>
                <option value ="Chest">Chest</option>
                <option value ="Glutes">Glutes</option>
                <option value ="Lats">Lats</option>
                <option value ="Lower Back">Lower Back</option>
                <option value ="Quads">Quadriceps</option>
                <option value ="Triceps">Triceps</option>
            </select>
        </div>
        <div class="form-group">
            <select name="weights" id="weights" Required>
                <option value ="0" selected="selected">Do you need weights?</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
            <p>Give a description of the exercise</p>
            <textarea name="description" id = "description" rows="10" cols="40" maxlength = "255" Required>
        </textarea>
        </div>
        <div class="form-group">
            <p>If possible, give a link to a description</p>
            <p>Don't know how to describe it? Try <a href=http://www.bodybuilding.com/> here</a></p>
            <input autocomplete="off" autofocus class="form-control" id = "link" name="link" placeholder="Type here" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Insert!
            </button>
        </div>
    </fieldset>
</form>