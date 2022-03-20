<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
img{
	height:150px;
	width:200px;
	margin-bottom:100px;
}
.anim{
	font-size:90px;
	
}
.wel2{
	font-size:30px;
	margin-left:100px;
	color:#6495ED;
	line-height:0px;
	
	
}
.wel{
	margin-top:100px;
}
table{
	margin:100px 0px 0px 100px;
	line-height:30px;
	font-size:20px;
	background-color:#90EE90;
}
</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>			
			<div class="col-md-6 wel">
				<img src="hands.jpg">
				<a class="navbar-brand animate__animated animate__infinite	infinite animate__bounce animate__slow	2s anim">WELCOME !
				<p class="wel2">To DotEvolve Task Login Page</p></a>
				<table border="2px">
				<th>#</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<?php
	$conn=mysqli_connect('localhost','root','','db_task');
	// if($conn){
		// echo'connected';
	// }
	// else{
		// echo'not';
	// }
	{
$q="SELECT * FROM tb_welcome";
	$r=mysqli_query($conn,$q);
	while($s=mysqli_fetch_array($r))
	{
	
		echo"<tr>";
		echo"<td width=200>".$s['id']."</td>";
		echo"<td width=200>".$s['username']."</td>";
		echo"<td width=200>".$s['password']."</td>";
		
		echo"</tr>";
	
	}
	}
?>
			</div>			
			<div class="col-md-3"></div>
		</div>
	</div>
</table>
</body>
</html>
