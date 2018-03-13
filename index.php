<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>QQ Car Sharing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="validation.js">
  </script>
</head>
<body>
  <img src="QQLogo.png">
  <div id="logoText">Car Sharing</div>
  <hr><br>
  <div id="loginTable"><u><b>Login Page</b></u>
    <br><br>
    <form action="index.php" name="login" onsubmit="return validate()" method="post">
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
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "carsharing";

          if(empty($_POST["username"]) || empty($_POST["password"]))
          {

          }
          else
          {
            $user = $_POST["username"];
            $pass = $_POST["password"];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error)
            {
              die("Connection failed: " . $conn->connect_error);
            }
            $result=mysqli_query($conn,"SELECT * FROM carsharing WHERE Username='$user' AND Password='$pass'");
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) <= 0)
            {
              echo("<script>alert('Invalid Username or Password');</script>");
            }
            else
            {
              if ($row["Role"]== "passenger") //User1 && Pass1 = Passenger
              {
                // alert("Login Successful as Passenger");
                header('Location: menuPassenger.php');
              }
              else if ($row["Role"]=="driver")  //User2 && Pass2 = Driver
              {
                // alert("Login Successful as Driver");
                header('Location: menuDriver.php');
              }
              else
              {

              }
            }
          }
         ?>
  </div>
</body>
</html>
