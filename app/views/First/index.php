<?php
if ($_COOKIE['cookie'] == 1) header('Location: /first/danger');
if (isset($_SESSION['user'])) header('Location: /first/user');
?>
<br><br>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="/first" method="post">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="login" name="log">
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <button type="submit" class="btn btn-default" name="login">Sign in</button>
        </form>
    </div>
</div>