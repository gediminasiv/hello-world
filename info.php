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
		</tr>  
		</thead>  
  
		<?php  

		$link = mysqli_connect("localhost","root","123456", "useriai");		
		$view_users_query="select * from user";
		$run=mysqli_query($link,$view_users_query);
		while($row=mysqli_fetch_array($run))
		{  
			$user_name=$row[0];  
			$user_email=$row[1];  
			$user_pass=$row[2];  
			$user_id=$row[3];
  
  
		?>  
  
		<tr>  
			<td><?php echo $user_id;  ?></td>  
			<td><?php echo $user_name;  ?></td>  
			<td><?php echo $user_email;  ?></td>  
			<td><?php echo $user_pass;  ?></td>  
		</tr>  
		<?php } ?>  
  
	</table>  
	</div>  
	</div> 
	</div>
	</div>
  
</body>  
  
</html>  
