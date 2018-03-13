<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>QQ Car Sharing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="validation.js"></script>
</head>
<body>
  <img src="QQLogo.png">
  <div id="logoText">Car Sharing</div>
  <hr><br>
  <div id="loginTable"><u><b>Login Page</b></u>
    <br><br>
    <form name="login" onsubmit="return validate()" method="post">
      <table style="width:25%">
        <tr>
          <th>Username:</th>
          <td><input type="text" name="username" class="usernameBox">
          </tr>
          <tr>
            <th>Password:</th>
            <td><input type="password" name="password" class="passwordBox">
          </tr>
          <th colspan="2">
            <input type="submit" value="Login" class="submitButton">
          </th>
        </table>
  </div>
</body>
</html>
