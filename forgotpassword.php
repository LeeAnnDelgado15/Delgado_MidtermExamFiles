
  <!DOCTYPE html>
  <?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

$conn3 = mysqli_connect($dbhost ,$dbuser,$dbpass,$dbname);

if(isset($_POST['Submitbtn']))
{ 
        $myemail = $_POST['myemail'];
        $query_email= "SELECT * FROM users WHERE email='$myemail'";
        $exist_em = mysqli_query($conn3, $query_email);
        $resultmails = mysqli_query($conn3, $query_email);

        if (empty($myemail)){
            header("Location: forgotpassword.php?error=Please enter your verified email");
                exit();

        }else if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) {
           header("Location: forgotpassword.php?error= You enter Invalid email");
            exit();

            }else if(mysqli_num_rows($exist_em) < 1 ){
          header("Location: forgotpassword.php?error= The Email Address Doesn't exists");    
          exit(); 

        }else if(mysqli_num_rows($resultmails) === 1) {

          $row3 = mysqli_fetch_assoc($resultmails);
           $_SESSION['email'] = $row3['email'];
          if($row3['email'] === $myemail){

              header("Location: changepassword.php");
                     
                
                }
          }
        }

    ?>
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
    <title>Forgot Password</title>
  </head>
  <body>
        <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <form action="" method="post"><!--tinanggalan ko yung form actio ng lama. naakalagay dati ay harrypotter.php-->
      <div class="login">
        <h3 style="text-align: center;">Forgot Password</h3>
        <!-- Para sa Textbox ni Username  -->
        <label for="em"><b>Email:</b></label>
        <input type="text" placeholder="Type Email Address here |" name="myemail">
     <center>   <input type="submit" class="button" value="Submit" name="Submitbtn"> </center>


      </div>

                
    </form>  
  </body>
</html>
