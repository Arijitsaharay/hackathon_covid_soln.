<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style>
  body {
  font-size: 28px;
  margin: 0;
  padding: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 28px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 28px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #111;
}
.active {
  background-color: #4CAF50;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body  >
  
<div class="navbar">
  <a class="active" href="database.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Data 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="user_details.php">User Credencials</a>
      <a href="user_details.php">Volunteer Credentials</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Service 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="database1.php">Get Help</a>
      <a href="database2.php">Provide Help</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Volunteer 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="task_form.php">Assign a Task</a>
      <a href="task_sheet.php">Ongoing Task</a>
    </div>
  </div>
  
  <a href="https://techcrat.000webhostapp.com/inhosp.html">Live Track</a>
  <a href="logout.php">Logout</a>
</div>


</body>
</html>

    <head>
        <title>We Care</title>
    </head>
  
    
<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR6mSekKho31pvJV6e2u0fSObTkjU2PQhxbVIdAVGUuLWdlWQzwEqW6d9YhEqOvympXsm8nc2uvqw0-/pubhtml?widget=true&amp;headers=false" width="100%" height="650px"></iframe>