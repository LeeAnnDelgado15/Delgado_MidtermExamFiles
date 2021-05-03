<!doctype html>
	<html>


	
	
	<style>

		body 
        {
           background-image: url("hpbg.jpg");
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           font-family: Arial, Helvetica, sans-serif;
           font-size: 13px;
           color: white;
           height: 853px;
        }

		.form 
        {
          color: #1e1e1e;
          background: rgba( 0,0,0,0.6);
          border-radius: 20px;
          display: inline-block;
          padding: 20px;
          margin:  5px 350px;
          border-color: #152238;
          width: 500px;

         
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


		input[type=submit]
		{
			/*background-color:#008CBA;*/
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			border-radius:15px;
			width: 40%;
			background-color: #4CAF50; /* Green */
  			text-decoration: none;
  			display: inline-block;
  			transition-duration: 0.4s;


		}
		
		input[type=submit]:hover
		{
			background-color:green;
			color:white;
			font-weight: bold;
		}

		input[type=reset]
		{
			/*background-color:#008CBA;*/
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			border-radius:15px;
			width: 40%;
			background-color: #ff6961; /* Green */
  			text-decoration: none;
  			display: inline-block;
  			transition-duration: 0.4s;


		}
		
		input[type=reset]:hover
		{
			background-color:#c21807;
			color:white;
			font-weight: bold;
		}

		/*font style/color ng text sa loob place holder*/
		input[type="text"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		/*font style/color ng text sa loob place holder para sa pasword*/
		input[type="password"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		/*font style/color ng text sa loob place holder para sa email*/
		input[type="email"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
			/*font style/color ng text sa loob place holder para sa contact num*/
		input[type="number"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}

		/*para sa check at x sa tabi ng contacts*/
		input + span {
  		padding-right: 30px;
		}

		input:invalid+span:after {
  		position: absolute; content: '✖';
  		padding-left: 5px;
  		color: #8b0000;
		}

		input:valid+span:after {
  		position: absolute;
  		content: '✓';
  		padding-left: 5px;
  		color: #009000;
		}
		/*font style/color ng text sa loob place holder para sa contact num*/
		
		input[type="date"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
				/*font style/color ng text sa loob place holder para sa contact num*/
		input[type="tel"] {
  		font-family: monospace;
  		font-size: 12px;
 		 color: black;
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 6px;
          box-sizing: border-box;
          margin-top:2px;
          margin-bottom: 5px;
          resize: vertical;

		}
		a:link, a:visited {
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			font-size:18px;
			cursor:pointer;
			border-radius:15px;
			width: 20%;
			background-color: #1e1e1e; /* Green */
  			text-decoration: none;
  			display: inline-block;
  			transition-duration: 0.4s;
  			margin:  5px 450px;
		}

		a:hover, a:active {
		background-color: dodgerblue;


		 /*font color ng place holder*/
		::placeholder {
 		 color: #3333333;
  		font-size: 13px;
		}

	

	</style>


    </body>
     <!-- Para sa Textbox ni Password <tr bgcolor=black>
		<body background="hpbg.jpg"   background-position: center;
           background-repeat: no-repeat;-->
		   <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
        <form action="function.php" method="post">
       <div class="form"> 
		<center>
			 <h1><font size = "50px" color="white" face="agency fb"> Registration Form</font></h1> 
		</center>
			<font size = "2" color="white" face="Segoe UI Semibold"> Direction: To completely register an account, Kindly fill out the following field.</font> 
		

			<!--<h2> <font size = "6px" color="white" face="agency fb">Personal Information</font> </h2>

			

			<font color="white" face="Segoe UI Semibold" size="2">

				Fullname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" id= "fname"placeholder="Firstname" name="fname" required>
					<input type="text"placeholder="Lastname" id= "lname"name="lname" required>
					<input type="text"placeholder="MI" id= "mi" name="mi" size="1"  required>

			</font> -->
	<br>
	<br>
			<h2> <font size = "6px" color="white" face="agency fb">Contact Information</font> </h2>
				<font size = "2" color="white" face="Segoe UI Semibold">
			    Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="email"placeholder="Email Address:" name="eadd" size="20" required>
				<br>
      		<!--	Mobile Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="tel" placeholder="Mobile No." name="mno" min="12" max="12"  size="13"  required>
				 <span class="validity"></span>
					</font> -->

	<br>
			
	<br>
			<h2> <font size = "6px" color="white" face="agency fb">Personal Account</font> </h2>
				 <font size = "2" color="white" face="Segoe UI Semibold">
				Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text"placeholder="Enter Username" name="uname" required>
				<br>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password"placeholder="Enter Password" name="psw" required>
	<br>
				Re type your password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password"placeholder="Re-type your password" name="rpsw" required>
				</font>
	<br>
			
	<br>				<center> <input type="reset" class="button" value="Reset" name="resettbt">
								<input type="Submit" class="button" value="Submit" name="submitbt"> 
						 </center>

			</div>
			</form>   
			                    <a href="login.php" target="login">Log In</a>
								
						 </center>

</html>