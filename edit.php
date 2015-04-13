<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Edit Window</h4>
	</div>
	<div class="modal-body">
		<div class="container-fluid">
		<form class="form-horizontal" role="form" method="POST">
		<div class="form-group">
			<label for="sel1">Select Id</label>
			<select class="form-control" name="selectId">
			<?php  
				$i=1;
				$link = mysqli_connect("mysql1.000webhost.com","a8715883_turbo","Qwe357", "a8715883_users");		
				$view_users_query="select * from user";
				$run=mysqli_query($link,$view_users_query);
				while($row=mysqli_fetch_array($run))
				{
					$i++;
					$user_name[$i]=$row[0];  
					$user_email[$i]=$row[1];  
					$user_pass[$i]=$row[2];  
					$user_id[$i]=$row[3];
			?>
			<option value="<?=$user_id[$i]?>"><?php echo $user_id[$i];  ?></option>	
				<?php } ?>
				</select>
			</div>
			
			<div class="form-group">	
				<label for="text">User Name</label>
				<input class="form-control" type="text" name="name" placeholder="User Name" />
			</div>
			<div class="form-group">
				<label for="password">Email</label>
				<input class="form-control" type="email" name="email" placeholder="Email"  />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password"  />
			</div>
		
		</div> 
</div>
	</div>
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary rem" name="userid" value="<?=$user_id[$i]?>">Save changes</button>
			</form>
	
	<?php
		
		$link = mysqli_connect("mysql1.000webhost.com","a8715883_turbo","Qwe357", "a8715883_users");
		$sql="UPDATE user SET name='".$_POST['name']."' WHERE id=".$_POST['selectId'];
		$res=mysqli_query($link,$sql);
		$sql="UPDATE user SET email='".$_POST['email']."' WHERE id=".$_POST['selectId'];
		$res=mysqli_query($link,$sql);
		$sql="UPDATE user SET password='".$_POST['password']."' WHERE id=".$_POST['selectId'];
		$res=mysqli_query($link,$sql);
	?>
	
</div>
