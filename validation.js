function validate()
{
  let formUser = document.forms["login"]["username"].value;
  let formPass = document.forms["login"]["password"].value;

  //User1 && Pass1 = Driver
  //User2 && Pass2 = Passenger

  if (formUser == "" || formPass == "")
  {
    alert("Please enter Username and Password");
    return false;
  }
  else if (formUser == "user1" && formPass == "pass1")
  {
    alert("Login Successful as driver");
    header("Location: menuDriver.php");

  }
  else if (formUser == "user2" && formPass == "pass2")
  {
    alert("Login Successful as passenger");
    header("Location: menuPassenger.php");

  }
  else
  {
    alert("Invalid Password and Username");
    return false
  }
}
