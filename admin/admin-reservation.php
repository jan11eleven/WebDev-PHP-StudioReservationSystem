<?php 
	require 'header.php';
	require 'side-bar.php';
	include('../crud/db.php');

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from schedules where reserveid = ". $id;
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$sql = "delete from schedules where reserveid=". $id;
			if(mysqli_query($conn, $sql)){
				header('Location: admin-reservation.php');
			}
		}
	}
 ?>

<main class="admin-reservation-container">
	<div class="admin-table-container">
		<h1>Reservation</h1>
		<div class="table-reserve" >
			<table cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Studio Type</th>
						<th>Time</th>
						<th>Duration</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "select * from schedules";
					$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result)){
						while($row = mysqli_fetch_assoc($result)){
							?>
							<tr>
								<td><?php echo $row['reserveid'] ?></td>
								<td><?php echo $row['studio_type'] ?></td>
								<td><?php echo $row['time'] ?></td>
								<td><?php echo $row['duration'] ?></td>
								<td><?php echo $row['date'] ?></td>
								<td class="text-center">
									<a href="admin-reservation.php?delete=<?php echo $row['reserveid'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
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