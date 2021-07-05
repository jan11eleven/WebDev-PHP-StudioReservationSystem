<?php 
	require 'header.php';
	require 'side-bar.php';
	include('../crud/db.php');

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from users where userID = ". $id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$sql = "delete from users where userID=".$id;
			if(mysqli_query($conn, $sql)){
				header('Location: admin-user.php');
			}
		}
	}
 ?>

<main class="admin-reservation-container">
	<div class="admin-table-container">
		<h1>User Accounts</h1>
		<div class="table-reserve" >
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Username</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "select * from users";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result)){
						while($row = mysqli_fetch_assoc($result)){
							?>
							<tr>
								<td><?php echo $row['userID'] ?></td>
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo $row['username'] ?></td>
								<td><?php echo $row['password'] ?></td>
								<td class="text-center">
									<a href="edit-user.php?id=<?php echo $row['userID'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i></a>
									<a href="admin-user.php?delete=<?php echo $row['userID'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
								</td>
							</tr>
							<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>			
	</div>

</main>
</body>
</html>