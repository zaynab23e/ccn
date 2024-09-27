<?php

?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/1.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php
				
//print_r($_SESSION);
//$name=$_SESSION;
$se="SELECT * FROM admin";
$re=$conn->query($se);
$t=$re->fetch_assoc();
echo $t['name']
			
				?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php
			if($st=="Dashboard"){
				echo "active";
			}
			?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="
			<?php
			if($st=="product"){//2==
				echo "active";
			}
			?>
			"><a href="product.php"><em class="fa fa-dashboard">&nbsp;</em> product</a></li>
           
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		