<div class="container">	
	<div class="jumbotron">
		<form class="form-horizontal" role="form">
			<div class="form-group">	
				<label for="text">User Name</label>
				<input class="form-control" type="text" name="name" placeholder="Your name" />
			</div>
			<div class="form-group">	
				<label for="email">Email Address</label>
				<input class="form-control" type="email" name="email" placeholder="Your email" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password"  />
			</div>
			<input type="submit" class="btn btn-warning" value="id" name="register" />
		</form>
	</div> 
</div>

<?php     
	
	//Kazkodel neveikia _POST
	
	if(isset($_GET['id']))
	{
		echo "success";
		if($_GET['name']=='' || $_GET['email']=='' || $_GET['password']=='')
		{
			echo "please fill the empty field.";
		}
		else
		{
			$link = mysqli_connect("localhost","root","123456", "useriai"); //neisejo idet atskiram
			$sql="INSERT INTO user(username,email,password) VALUES('".$_GET['name']."', '".$_GET['email']."', '".$_GET['password']."')";
			$res=mysqli_query($link,$sql);
		
			if($res)
			{
				echo "Record successfully inserted";
			}
			else
			{
				echo "There is some problem in inserting record";
			}

		}
	}

	
	
?>
