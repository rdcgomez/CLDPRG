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
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
        <div class="tab-content">
          <div id="login" >   
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

          <div id="signup" >   
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

          <script>
            function openTab(evt, tabName) {
                document.getElementsByClassName("tab-content").innerHTML ='#login';
            }
          </script>

        </div> <!-- tab-content -->
      </div> <!-- form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>