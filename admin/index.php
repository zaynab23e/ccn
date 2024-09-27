
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
<?php
include("coon/connect.php");
if($_SERVER['REQUEST_METHOD']==='POST'){

	//print_r($_POST);
	$name=$_POST['name'];
	$pass=$_POST['pass'];
$select="SELECT * FROM admin WHERE name='$name' && pass='$pass'";
$result=$conn->query($select);
$num=$result->num_rows;
$row=$result->fetch_assoc();

;
if($num>0 && $row['par']=='1'){
	$_SESSION['log'] = $name;
	header("location:dashboard.php");
}

}



?>

					<form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="name" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password" value="">
							</div>
							
							</fieldset>
<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

	if ($num>0 && $row['par']=='2') {
		$user=$row['name'];
		echo "<div class= 'alert alert-warning'>$user you cant bass </div>";
	}

	elseif ($num>0 && $row['par']=='3') {
		$user=$row['name'];
		echo "<div class= 'alert alert-warning'>$user you cant bass </div>";
	}


	if ($num===0) {
		
		echo "<div class= 'alert alert-danger'>data not fund you cant bass </div>";
	}
	
}




?>
							<button type="submit"class="btn btn-primary" >Login</button>
					</form>
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
