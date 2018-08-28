<?php 
/* Login page with two forms: sign up and log in */
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="css/loginstyle.css" />
</head>


<body>
  <div class="form">
    <!-------------------------------------------------------------------------->
        <div id="mtabs">
          <ul class="tab-group">
            <li><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
          </ul>
        </div>
    <!-------------------------------------------------------------------------->   
        <div id="tab-content">
          <!-------- LOGIN ---------> 
          <div id="login" class="mtab_content">   
            <h1>Sign in with your Basketball Manager Account</h1>

              <form method="post" autocomplete="off">
                <div class="field-wrap">
                  <input type="email" 
                    placeholder="Email Address" 
                    required autocomplete="off" 
                    name="lemail"/>
                </div>
                <div class="field-wrap">
                  <input type="password" 
                    placeholder="Password" 
                    required autocomplete="off" 
                    name="lpassword"/>
                </div>

                <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                <button class="button button-block" name="login" />Log In</button>
              </form>

          </div>
          <!-------- SIGN UP ---------> 
          <div id="signup" class="mtab_content">   
            <h1>Sign Up for Free</h1>
            
              <form method="post" autocomplete="off">
                  <div class="top-row">

                    <div class="field-wrap">
                      <input type="text" 
                        placeholder="First Name" 
                        required autocomplete="off" 
                        name='first_name' />
                    </div>
                    <div class="field-wrap">
                      <input type="text"
                        placeholder="Last Name" 
                        required autocomplete="off" 
                        name='last_name' />
                    </div>

                  </div>
                    <div class="field-wrap">
                      <input type="email"
                        placeholder="Email Address" 
                        required autocomplete="off" 
                        name='email_address' />
                    </div>   
                    <div class="field-wrap">
                      <input type="password"
                        placeholder="Password"
                        required autocomplete="off" 
                        name='rpassword'/>
                    </div>
                            
                <button type="submit" class="button button-block" name="register" />Register</button>        
              </form>
          </div>
        </div> <!-- TAB-CONTENT -->
      <!-------------------------------------------------------------------------->
      
  </div> <!-- FORM -->
<!------------------------------------------------------------------------------------------------------------------------------------------->  
<!----SIGN UP---->
  <?php
      include_once 'db_config.php';
      
      if(isset($_POST['register'])) {
        // variables for input data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email_address'];
        $password = $_POST['rpassword'];

        // encrypt password (security)
        $passwordencrypted = md5($password); 

        // sql query for inserting data into database
        $sql_query = "INSERT INTO users(first_name,last_name,email_address,password) 
                        VALUES('$first_name','$last_name','$email','$passwordencrypted')";	
      
      // sql query execution function
        if(mysqli_query($con,$sql_query)) {
          echo" 
            <script>
            alert('Registration Successful!');
            window.location.href='index.php';
            </script>
          ";
        }
        else {
          echo"
            <script>
            alert('An error occured while inserting your data');
            </script>
          ";
        }
      }
  ?> 
<!----LOGIN---->
  <?php
      include_once 'db_config.php';

      if(isset($_POST['login'])) {
        // variables for login data
        $email = $_POST['lemail'];
        $password = $_POST['lpassword'];

        // encrypt password (security)
        $passwordencrypted = md5($password); 

        $sql_query = "SELECT * FROM users WHERE email_address = '$email' AND password = '$passwordencrypted' ";
        $result=mysqli_query($con,$sql_query);  
        if (mysqli_num_rows($result) == 1) {
          //login success
          echo " 
            <script>
            alert('You are now logged in!');
            window.location.href='indexlogout.php';
            </script>
          ";
          

        } else {
            echo"
            <script>
            alert('Wrong Email Address/Password!');
            </script>
            ";
        }  
      }
  ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
  <script src="functions.js"></script>
</body>
</html>