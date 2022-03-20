<!--<?php

	// $conn = mysqli_connect('localhost','root','','db_task');
	
	// if($conn){
		// echo 'yes connect';
	// }
	// else {
		// echo 'not connect';
	// }
	// if(isset($_POST['submit1']))
	// {
		// $a = $_POST['name1'];
		// $b = $_POST['psswrd'];
		
		
		// $q="INSERT INTO tb_login(name,email,)VALUES('$a','$b',)";
		// $q1=mysqli_query($conn,$q);
		
			// if($q1)
			// {
				// echo"<script>alert('REGISTER SUCESSFULLY');</script>";
			// }
			// else{
				// echo"<script>alert('NOT REGISTERED');</script>";
			// }
	// }
	
	
	
// ?>	-->


<?php

	$conn =mysqli_connect('localhost','root','','db_task');
	if(isset($_POST['submit1']))
	{
		$a=$_POST['name1'];
		$b=$_POST['psswrd'];
		if($a == "admin")
			
		{
		$q="SELECT * FROM tb_welcome WHERE username='$a' ";
		$q1=mysqli_query($conn,$q);
		// echo'<pre>';print_r($q1);die;
		$q2=mysqli_fetch_array($q1);
	
		$pass1 = $q2['password'];
		// echo'<pre>';print_r($pass1);die;
		if($b == $pass1)
			// echo'<pre>';print_r($p);die;
		{
			 header('location:welcome.php');
			}
			else{
				echo"<script>alert('enter valid details');</script>";
			}
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>
<body>


<div class="container-fluid one">
	<div class="row">
	<div class="col-md-1 wave">
	<img src="wave.png"></div>
	<div class="col-md-1">
		<img src="bg.jpg.svg">

	</div>
	<div class="col-md-4"></div>
		<div class="col-md-6">
			<form method="post" class="form_field">
		<div class="log">
			<h1>login to your account</h1>
		</div>
		<div class="input_field">
			<input type="text" name="name1" placeholder="Username" required size="40px"  autocomplete="off">
		</div>
		
		<div class="input_field">
			<input type="password" name="psswrd" placeholder="password" size="40px"  >
		</div>
		
<div >
	<input type="submit" name="submit1" value="LOG IN" class="btn">
	
</div>

</div>
	
	</div>
		</div>
		
		


</form>	
</body>
</html>