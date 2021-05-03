
  <?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($_SERVER['REQUEST_METHOD'] == "POST")
{ 

  $npass = $_POST['newpass'];
  $cpass = $_POST['confirmpass'];


  
  if(empty( $npass)){
      header("Location: changepassword.php?error= New password is required");
      exit();

    }else if(empty($cpass)){
      header("Location: changepassword.php?error=Confirming password is required");
      exit();

    } else if(!empty($npass) && !empty($cpass))
      {
        if( strlen($npass ) < 8 ) {
          header("Location: changepassword.php?error=Password must be atleast 8 characters");
            exit();
        }else if( !preg_match("#[0-9]+#",  $npass ) ) {
          header("Location: changepassword.php?error=Password must include at least one number!");
          exit();
        }else if( !preg_match("#[a-z]+#",  $npass) ) {
          header("Location: changepassword.php?error=Password must include at least one small letter!");
          exit();
        }else if( !preg_match("#[A-Z]+#",  $npass ) ) {
          header("Location: changepassword.php?error=Password must include at least one capital letter!");
          exit();
        }else if( !preg_match("#\W+#", $npass )) {
          header("Location: changepassword.php?error=Password must include at least one symbol!");
          exit();

        }else if($_POST['newpass'] !== $_POST['confirmpass']) {
        header("Location: changepassword.php?error=Password and Confirm password should match!");
          exit();
          
        }else{

         $em=$_SESSION['email'];

          // echo $em;
          $query_pass="UPDATE users set password='$cpass' where email='$em'";

        $run2 = mysqli_query($connect,$query_pass) or die(mysqli_error($connect));



        if ($run2){
          header("Location: login.php");
        }
        }
      }
   }



?>
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
    <title>Change Password</title>
  </head>
  <body>
        <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <form action="" method="post"><!--tinanggalan ko yung form actio ng lama. naakalagay dati ay harrypotter.php-->
      <div class="login">
        <h3 style="text-align: center;">Change Password FORM</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="newpass"><b>New Password:</b></label>
        <input type="password" placeholder="Type New Password here |" name="newpass"> <!--pinalitan ko yung name from uname ginawa kong username-->
        <!-- Para sa Textbox ni Password  -->
        <label for="conpass"><b>Confirm Password:</b></label>
        <input type="password" placeholder="Re-Type Password here |" name="confirmpass"><!--pinalitan ko yung name from psw ginawa kong password-->
        <!-- Para sa  Login Button -->
     <center>   <input type="submit" class="button" value="Submit" name="subchange"> </center>


      </div>

                
    </form>  
  </body>
</html>
