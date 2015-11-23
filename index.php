<!doctype html>
<html>

    <head>
    <title>Login forum</title>
       <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div id="container">
            <form action="logincheck.php" method="POST">
            <fieldset>
        <legend>Please Login</legend>

                <div class="line">
                        <label for="username">Username *: </label><br>
                        <input type="text" value="daniel" name="user_name" id="username" /></div>
                        <div class="line">

                        <label for="pwd">Password *: </label><br>
                        <input type="password" name="pass" value="wambua" id="pwd" /></div>
                        <!-- You may want to consider adding a "confirm" password box also -->
                        <div class="line_submit">
                        <input type="submit" name="submitlog" value="Submit" />
                </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
