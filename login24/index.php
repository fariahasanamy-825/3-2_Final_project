<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wellcome</title>
	<link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>
	<div class="header">
		<h2>Wellcome</h2>
	</div>
	<div class="content">
		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: blue;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
                        <a href="gfffffffffffffffffffff/home.html" style="color: blue;">click here to enter</a>
                        
                        
                        
                    
                       
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>