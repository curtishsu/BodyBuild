<form action="register.php" method="post" onsubmit = "return registervalidate()">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" id = "username" autofocus class="form-control" name="username" placeholder="Username" type="text" Required/>
        </div>
        <div class="form-group">
            <input class="form-control" id = "password" name="password" placeholder="Password" type="password" minlength = "8" Required/>
        </div>
        <div class="form-group">
            <input class="form-control" id = "confirmation" name="confirmation" placeholder="Password (again)" type="password" minlength = "8" Required/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a> for an account
</div>
