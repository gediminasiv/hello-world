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
		$user_name = array();
		$user_email = array();
		$user_pass = array();
		$i = 1;
			$user_name[$i]=$row[0];  
			$user_email[$i]=$row[1];  
			$user_pass[$i]=$row[2];  
			$user_id[$i]=$row[3];
  
  
		?>  
  
		<tr>  
			<td><?php echo $user_name[$i];  ?></td>  
			<td><?php echo $user_email[$i];  ?></td>  
			<td><?php echo $user_pass[$i];  ?></td>
			<td><?php echo $user_id[$i];  ?></td>
			<td>
			<form method="post">
				<a href="edit.php" data-toggle="modal" data-target="#editModal"><button type="button" class="edit btn btn-info"><span class="glyphicon glyphicon-pencil" aria-label="Edit"></span></button></a>
				<button type="submit" class="btn btn-danger" name="userid" value="<?=$user_id[$i]?>"> <span class="glyphicon glyphicon-remove" aria-label="Remove"></span></button>
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
	<div id="editModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>
</body>  
  
</html>  
