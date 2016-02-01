<h3>Change Your Password</h3>
<form action="password.php" method="post" onsubmit="return validatechangepassword()">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" id="username" Required type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="oldpassword" placeholder="Password" type="password" id = "oldpassword" Required/>
        </div>
        <div class="form-group">
            <input class="form-control" name="newpassword" placeholder="New Password" minlength = "8" type="password" id="newpassword" Required/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="New Password (again)" type="password" id="confirmation" Required/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Change!
            </button>
        </div>
    </fieldset>
</form>
