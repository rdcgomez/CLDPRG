
<!-- UPDATE FORM-->
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email_address'];
 $contact_number = $_POST['contact_number'];
 $url_website = $_POST['url_website']; 
 // variables for input data

 // sql query for update data into database
 $sql_query = "	UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name',
				email_address='$email',contact_number='$contact_number',url_website='$url_website'
				WHERE user_id= ".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='mypagedatabase.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: mypagedatabase.php");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>

	<style>
		#crud {
			border-radius: 5px;
			background-color: #1F2837;
			padding: 10px;
			margin-top: 50px;
			color: white;
		}
		td {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 150%;
            color: white;
        }
		body {
            background-image: url(images/destiny.jpg);
            background-size:     cover;
            background-repeat:   no-repeat;
			border-style: solid;
			
			
			border-left-width: 100px;
			border-right-width: 100px;
			border-top-color: white;
			border-bottom-color: white;
        }
		table {
            width: 100%;
        }
		input {
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;;
		}
		button[type=submit] {
			width: 49.5%;
			background-color: #64D004;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		button[type=submit]:hover {
			background-color: #45a049;
		}
    </style>
	
</head>
<body>

<center>

<div id="crud">
 <label>UPDATE INFORMATION</label>
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email_address" placeholder="Email Address" value="<?php echo $fetched_row['email_address']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="number" name="contact_number" placeholder="Contact Number" value="<?php echo $fetched_row['contact_number']; ?>" /></td>
    </tr>
	<tr>
    <td><input type="url" name="url_website" placeholder="Website" value="<?php echo $fetched_row['url_website']; ?>" /></td>
    </tr>

	
	
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    
</div>

</center>

</body>
</html>