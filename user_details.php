<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<style>
  body {
  font-size: 20px;
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
  
    

<!DOCTYPE html>
<html>
<head>
	<title>Database Crud Operation</title>
</head>
<style type="text/css">
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
	<!--<h3><u>Insert Form</u></h3>
	 <form name="" action="allfunction.php" method="post">
		<table border="1">
			<tr>
					<td>Username: </td>
					<td><input type="text" name="u_name"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="phone"></td>
				</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="registrationbn"></td>
			</tr>
		</table>
	</form>

	<hr> -->

	<h3><u>User's Data </u></h3>
	<table border="1">
		<tr>
			<th>User Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM user";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['u_name']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><a href="editForm.php?mode=edit&user_id=<?php echo $row['user_id']; ?>">Edit</a> | <a href="allfunction.php?mode=delete&user_id=<?php echo $row['user_id']; ?>">Delete</a></td>
				</tr>
				<?php
			} 
		?>

	</table>


</body>
</html>


<!-- <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 -->

