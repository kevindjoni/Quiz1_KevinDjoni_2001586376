
function validate()
{
  let formUser = document.forms["login"]["username"].value;
  let formPass = document.forms["login"]["password"].value;

  if (formUser == "" || formPass == "")
  {
    alert("Please enter Username and Password");
    return false;
  }
  else {
    return true;
  }
  else if (formUser == "user1" && formPass == "pass1")
  {
    alert("Login Successful as Passenger");
    header("Location: menuPassenger.php");
  }
  else if (formUser == "user2" && formPass == "pass2")
  {
    alert("Login Successful as Driver");
    header("Location: menuDriver.php");
  }
  else
  {
    alert("Invalid Password and Username");
    return false;
  }
}
