<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>YOUR ARTICLE</title>
      <link rel="stylesheet" href="mainlogin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <h1>YOUR ARTICLE</h1>
   </head>
   <body>
      <div class="wrapper">
         
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Register</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="validation.php" class="login" method="POST">
                  <div class="field">
                     <input type="text" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Register</a>
                  </div>
               </form>
               <form action="register.php" class="signup" method="POST">
                  <div class="field">
                     <input type="text" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" id="password" name="password" placeholder="Password" required>
                  </div>
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Register">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>