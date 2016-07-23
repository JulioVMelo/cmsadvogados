<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Responsive Login Form</title>
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="css/login.css">
   </head>
  <body>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
        <form action="../model/util/log.php" class="login" method="post">
              <div class="login-header">
                <h1>Login</h1>
              </div>
              <div class="login-form">
                <h3>Username:</h3>
                <input type="text" name="username" placeholder="Username"/><br>
                <h3>Password:</h3>
                <input type="password" name="password" placeholder="Password"/>
                <br>
                <input type="submit" value="Login" class="login-button"/>
              </div>
        </form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script src="js/login.js"></script>

    
    
    
  </body>
</html>
