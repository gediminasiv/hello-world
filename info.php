	<style>
		.edit {
			
			margin-right:5%;
		}
		.remove {
			
			margin-left:5%;
			
		}
    </style>
	<html>
	<div class="container">
	<div class="jumbotron">
	<div class="table-scrol">  
	<h1 align="center">All the Users</h1>  
  
	<div class="table-responsive">
  
  
	<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
		<thead>  
  
		<tr>     
			<th>User Name</th>  
			<th>User E-mail</th>  
			<th>User Pass</th>
			<th>User Id</th>
			<th>Edit</th>
		</tr>  
		</thead>  
  
		<?php  

		$link = mysqli_connect("mysql1.000webhost.com","a8715883_turbo","Qwe357", "a8715883_users");		
		$view_users_query="select * from user";
		$run=mysqli_query($link,$view_users_query);
		while($row=mysqli_fetch_array($run))
		{  
		$user_id = array();
		$i = 1;
			$user_name=$row[0];  
			$user_email=$row[1];  
			$user_pass=$row[2];  
			$user_id[$i]=$row[3];
  
  
		?>  
  
		<tr>  
			<td><?php echo $user_name;  ?></td>  
			<td><?php echo $user_email;  ?></td>  
			<td><?php echo $user_pass;  ?></td>
			<td><?php echo $user_id[$i];  ?></td>
			<td>
			<form method="post">
				<button type="submit" class="btn btn-info" name="userid" value="$user_id[$i]"> <span class="glyphicon glyphicon-pencil" aria-label="Edit"></span></button>
				<a href="remove.php" data-toggle="modal" data-target="#removeModal"><button type="button" class="remove btn btn-danger"><span class="glyphicon glyphicon-remove" aria-label="Remove"></span></button></a>
			</form>
			</td>
		</tr>  
		<?php  
		
		$i++;		
		}
		if(isset($_POST['userid']))
		{
			$sql="DELETE FROM user WHERE id=".$_POST['userid'];
			$res=mysqli_query($link,$sql);
			
		}		?>  
  
	</table>  
	</div>  
	</div> 
	</div>
	</div>
	
</body>  
  
</html>  
