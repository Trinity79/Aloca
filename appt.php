<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<link rel="stylesheet"
		href="admin.css">
	<!-- <link rel="stylesheet"
		href="responsive.css"> -->
		<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<style>
	
</style>
	</head>

<body>

	<!-- for header part -->
	<div class="header1">

		<div class="logosec">

		</div>


	<div class="message" style="opacity: 1;">
			<div class="circle"></div>
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt="">
			<div class="dp">
			<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</div>


		<div class="main" style="padding-top: 100px;">


			<!-- <div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">50</h2>
						<h2 class="topic">Total Rooms</h2>
					</div>

					<img src=
"https://img.icons8.com/ios7/600w/000000/room.png"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">34</h2>
						<h2 class="topic">Occupied</h2>
					</div>

					<img src=
					https://cdn-icons-png.flaticon.com/128/4994/4994708.png
						alt="likes">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">16</h2>
						<h2 class="topic">Vacant</h2>
					</div>

					<img src=
"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4G2wfYOTWTpf0Js5sVoRdo_TAv1UUUwEE4V3kvWg3j_KHJjK0Myuzy46h-xLL2QUlvI0&usqp=CAU"
						alt="comments">
				</div>
			</div> -->

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Approved List</h1>
					<button class="view" onclick=" window.open('fappt.php','_blank')">View All</button>
				</div>
				<table class="styled-table">
				<thead>
					<tr>
					<th scope="col">ID</th>
					<th scope="col">REQUESTED BY</th>
					<th scope="col">ROOM</th>
					<th scope="col">DAY</th>
					<th scope="col">SLOT</th>
					<th scope="col">PERIOD</th>
					<th scope="col">STATUS</th>
					</tr>
				</thead>

                <?php 
$username = $_SESSION['username'];

$query = "SELECT * FROM  pending_status where status = 'approved' and username = '$username' LIMIT 5";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_array($result)) { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
     
	  <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['room']; ?></td>
      <td><?php echo $row['Day']; ?></td>
      <td><?php echo $row['Slot']; ?></td>
      <td><?php echo $row['period']; ?></td>
      <td><?php echo $row['status']; ?></td>
    </tr>
  </tbody>

  <?php } ?>
				</table>
			</div>
</body>
</html>
