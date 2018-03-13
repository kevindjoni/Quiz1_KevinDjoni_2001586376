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
  <br>
  <ul id="linkMenu">
    <li><a href="availableOffers.php">Available Offers</a></li>
    <li><a href="requestedRoutes.php">Requested Routes</a></li>
    <li><a href="driverOfferedRoutes.php">My Routes Offered</a></li>
  </ul>
  <hr><br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date/Time</th>
        <th scope="col">Source Location</th>
        <th scope="col">Target Location</th>
        <th scope="col">Driver Name</th>
        <th scope="col">Average Rating</th>
        <th scope="col">Ratings</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>03/13/2018 11.04</td>
        <td>Tangerang</td>
        <td>Jakarta</td>
        <td>Agus</td>
        <td>8.6</td>
        <td>73</td>
        <td><button type="button" class="btn btn-success">Book</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>03/14/2018 13.00 </td>
        <td>Jakarta Barat</td>
        <td>Jakarta Timur</td>
        <td>Sugeng</td>
        <td>7.2</td>
        <td>42</td>
        <td><button type="button" class="btn btn-success">Book</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>03/14/2018 19.00 </td>
        <td>Jakarta Utara</td>
        <td>Jakarta Timur</td>
        <td>Agus</td>
        <td>7.4</td>
        <td>19</td>
        <td><button type="button" class="btn btn-success">Book</button></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>03/14/2018 09.30 </td>
        <td>Jakarta Utara</td>
        <td>Depok</td>
        <td>Agus</td>
        <td>9.2</td>
        <td>33</td>
        <td><button type="button" class="btn btn-success">Book</button></td>
  </tr>
  <tr>
    <th scope="row">4</th>
    <td>03/15/2018 14.00 </td>
    <td>Jakarta Selatan</td>
    <td>Tangerang Selatan BSD</td>
    <td>Ocit</td>
    <td>9.2</td>
    <td>48</td>
    <td><button type="button" class="btn btn-success">Book</button></td>
  </tr>
</tbody>
</table>
<br><br>
  <div id="logoutDriver"><a href="index.php" >Log Out (as Driver)</a></div>
</body>
</html>
