<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Edit Window</h4>
	</div>
	<div class="modal-body">
		<div class="container">	
		<form class="form-horizontal" role="form" method="POST">
			<div class="form-group">	
				<label for="text">User Name</label>
				<input class="form-control" type="text" name="name" placeholder="<?=$user_name[$i]?>" />
			</div>
			<div class="form-group">
				<label for="password">Email</label>
				<input class="form-control" type="email" name="email" placeholder="<?=$user_email[$i]?>"  />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" placeholder="<?=$user_pass[$i]?>"  />
			</div>
		
	</div> 
</div>
	</div>
	<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary rem" data-dismiss="modal" name="userid" value="<?=$user_id[$i]?>">Save changes</button>
			</form>
	</div>
	<?php
		
		$link = mysqli_connect("mysql1.000webhost.com","a8715883_turbo","Qwe357", "a8715883_users");
		$sql="UPDATE user SET name='".$_POST['name']."' WHERE id=".$_POST['id'];
		$res=mysqli_query($link,$sql);
		$sql="UPDATE user SET email='".$_POST['email']."' WHERE id=".$_POST['id'];
		$res=mysqli_query($link,$sql);
		$sql="UPDATE user SET password='".$_POST['password']."' WHERE id=".$_POST['id'];
		$res=mysqli_query($link,$sql);
	?>
	
</div>
