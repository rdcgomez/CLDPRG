<?php 
/* Login page with two forms: sign up and log in */
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" href="css/loginstyle.css" />
</head>


<body>
  <div class="form">
        <div id="mtabs">
          <ul class="tab-group">
            <li><a href="#signup">Sign Up</a></li>
            <li class="tab active"><a href="#login">Log In</a></li>
          </ul>
        </div>
        <div id="tab-content">
          <div id="login" class="mtab_content">   
            <h1>Sign in with your Basketball Manager Account</h1>

              <form action="######" method="post" autocomplete="off">
                <div class="field-wrap">
                  <input type="email" 
                    placeholder="Email Address" 
                    required autocomplete="off" 
                    name="email"/>
                </div>
                <div class="field-wrap">
                  <input type="password" 
                    placeholder="Password" 
                    required autocomplete="off" 
                    name="password"/>
                </div>

                <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                <button class="button button-block" name="login" />Log In</button>
              </form>

          </div>

          <div id="signup" class="mtab_content">   
            <h1>Sign Up for Free</h1>
            
              <form action="######" method="post" autocomplete="off">
                  <div class="top-row">

                    <div class="field-wrap">
                      <input type="text" 
                        placeholder="First Name" 
                        required autocomplete="off" 
                        name='firstname' />
                    </div>
                    <div class="field-wrap">
                      <input type="text"
                        placeholder="Last Name" 
                        required autocomplete="off" 
                        name='lastname' />
                    </div>

                  </div>
                    <div class="field-wrap">
                      <input type="email"
                        placeholder="Email Address" 
                        required autocomplete="off" 
                        name='email' />
                    </div>   
                    <div class="field-wrap">
                      <input type="password"
                        placeholder="Password"
                        required autocomplete="off" 
                        name='password'/>
                    </div>
                            
                <button type="submit" class="button button-block" name="register" />Register</button>        
              </form>
          </div>  <!-- sign up --> 
        
        </div> <!-- tab-content -->
    </div> <!-- form -->
    <script>
       
      </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
    <script src="functions.js"></script>
    
</body>
</html>
