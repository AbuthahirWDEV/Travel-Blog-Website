<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="loginstyle.css">
    <title>Login</title>
</head>
<body>


    <!-- <div class="menu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Destination</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="login.html">Login</a></li>
        </ul>
      </div> -->



    <!--Login Form-->
    <?php

include('./inc/config.php');
    ?>

    
    <div class="container">
    
      <div class="login">
      <form action="./loginres.php">
         <div class="container">
              <h1>Log in</h1>
              <input type="text" name="username" placeholder="username">
              <input type="password" name="password"  placeholder="Password"><br>
              <!--<input type="checkbox"><span>Remember me</span>
              <a href="#">Forgot password?</a>-->
              <button>log in</button>
             <!-- <hr><p>Or Connect With</p><hr>
              <ul>
                  <li><i class="fab fa-facebook-f fa-2x"></i></li>
                  <li><i class="fab fa-twitter fa-2x"></i></li>
                  <li><i class="fab fa-github fa-2x"></i></li>
                  <li><i class="fab fa-linkedin-in fa-2x"></i></li>
              </ul>-->
              <div class="clearfix"></div>
              
         </div>  </form>
      </div>  
  
      <div class="register">
          <div class="container">
              <i class="fas fa-user-plus fa-5x"></i>
              <h2>Hello,friend!</h2>
              <p>Enter your personal details and start journey with us</p>
              <a href="register.php"> <button>Register <i class="fas fa-arrow-circle-right"></i></button></a>
          </div>
      </div>  
    </div>


      
    
    
    
    <!--<script> //javascript validation
        function validateform()
        {  //function writing
          var user= [{name:"Abu",pass:"824"}] // array
            var name=document.myform.name.value;   // objects
            var password=document.myform.password.value;  
              
            if (name==null || name==""){   //control statements
              alert("Name can't be blank");  
              return false;  
            }else if(password.length<6){  
              alert("Password must be at least 6 characters long.");  
              return false;  
              }  
        }  
    </script>-->
        
    
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>