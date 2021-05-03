
  <!DOCTYPE html>
<html>
  <head>
    <style> 
     
      body
        {
           background-image: url("hpbg.jpg");
           height: 825px;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           font-family: Arial, Helvetica, sans-serif;
           font-size: 13px;
           color: white;
           width: 30px;

        }
      .login 
        {
          border-radius: 20px;
          display: inline-block;
          background-color: #152238;
          padding: 20px;
          width: 300px;
          margin:  60px 440px;
          background: rgba( 0,0,0,0.6);


        }
      input[type=text], input[type=password]
        {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
      .forgot
        {

          width: 100%;
          padding: 12px;
        } 
      .button 
        {
          background-color: dodgerblue;
          border-radius: 50px;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          width: 50%;
          font-size: 20px;
          margin: 4px 2px;
          cursor: pointer; 
          }



          .error {
          background: #1e1e1e;
          color: white;
          text-align: center;
          padding: 10px;
          width: 40%;
          border-radius: 15px;
          margin-top: 20px;
          margin:  40px 350px;
          height: 25px;
          font-size: 20px;
         width: 500px;
        }


          a:link {
          color: #187bcd;
          background-color: transparent;
          text-decoration: none;

          }
          a:visited {
          color:#187bcd;
          background-color: transparent;
          text-decoration: none;
          }
          a:hover {
          color: #289df4;
          background-color: transparent;
          text-decoration: underline;
          }
          a:active {
          color: yellow;
          background-color: transparent;
          text-decoration: underline;
          }

    </style>
    <title>LOGIN FORM</title>
  </head>
  <body>
        <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <form action="harrypotter.php" method="post"><!--tinanggalan ko yung form actio ng lama. naakalagay dati ay harrypotter.php-->
      <div class="login">
        <h3 style="text-align: center;">LOGIN FORM</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Type Username here |" name="uname"> <!--pinalitan ko yung name from uname ginawa kong username-->
        <!-- Para sa Textbox ni Password  -->
        <label for="password"><b>Password:</b></label>
        <input type="password" placeholder="Type Password here |" name="psw"><!--pinalitan ko yung name from psw ginawa kong password-->
        <!-- Para sa  Login Button -->
     <center>   <input type="submit" class="button" value="Log In" name="loginbt"> </center>

        <span class="forgot"><a href="forgotpassword.php"><center>Forgot Password? </center></a></span>
        <font color="white">  
        <center>Dont have an account yet? </font>
         <a href="regform.php" target="regform">CLICK HERE</a> </center></a></span>  

      </div>

                
    </form>  
  </body>
</html>
