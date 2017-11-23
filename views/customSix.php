<?php
/*
VERSION 1.3.3
*/
	include_once("../main/db.php");
	include_once("../main/header.php");
	$sql = ("SELECT COUNT(Tutor_ID), Course_ID
          FROM TUTOR
          GROUP BY Course_ID");
	$result = mysqli_query($db, $sql);
?>
  <head>
		<link rel="stylesheet" type="text/css" href="http://evanhahn.com/wp-content/uploads/2011/08/nonselect.css">
		<script type="text/javascript" src="http://platform-api.sharethis.com/js/sharethis.js#property=589bbcb38cb6e0001365b8a2&product=inline-share-buttons"></script>
	</head>
	<body style = "margin-top: 70px;">
		<h3 align="center">Custom View 6</h3>
		<table class="table table-hover">
			<tr>
        <th> Course_ID</th>
				<th> Number of Tutors </th>
      	</tr>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
          echo "<td>" . $row['Course_ID'] . "</td>"; 
					echo "<td>" . $row['COUNT(Tutor_ID)'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
