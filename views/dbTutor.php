<html>
<!-- VERSION 1.4.0 -->
<?php 
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = "SELECT * FROM TUTOR";
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body>
		<h3 align="center">Tutors</h3>
		<table class="table table-hover">
			<tr><th>Tutor ID</th>
				<th>Name</th>
				<th>Course ID</th>
				<th>GPA</th>
				<th>Cost</th>
				<th>Available Date</th>
				<th>Time</th>
				<th>Password (Encrypted)</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['Tutor_ID'] . "</td>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['Course_ID'] . "</td>";
					echo "<td>" . $row['GPA'] . "</td>";
					echo "<td>" . $row['Cost'] . "</td>";
					echo "<td>" . $row['Date_Available'] . "</td>";
					echo "<td>" . $row['Time'] . "</td>";
					echo "<td>" . $row['Password'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>

