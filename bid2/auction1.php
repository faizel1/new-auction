<head>
<title>Delete Table Row with animation</title>
<style>
table
{
	border-collapse: collapse;
	border: 1px solid #0098D3;
}
th 
{
	padding:5px;
	background:#0098D3;
	color:#FFF;
}
td
{
	border: 1px solid #0098D3;
	color:gray;
}
.deleteLink
{
	text-decoration:underline;
	color:blue;
}
.deleteLink:hover
{
	cursor:pointer;
	text-decoration:none;
}
tr td a img 
{
	float:left;
}
</style>
<script src="jquery.js"></script>
<script>
function deleteStudent(id) {
	$.post("delete.php" , {sid:id} , function(data){
		$("#" + id).fadeOut('slow' , function(){$(this).remove();if(data)alert(data);});
	});	
		
    }
	</script>
	</head>
<?php
	$con = new mysqli('localhost' , 'root' , 'root' , 'test_db');
	$result = $con->query("select * from student");
	echo '<table  >';
	echo '<tr> <th>Student ID</th>
		 <th>Name</th>
		 <th>Program</th>
		 <th>Delete</th></tr>';
		 
	while($row = $result->fetch_assoc())
		echo '<tr id="' . $row['id'] . '">
			 <td>' . $row['id'] . '</td>
			 <td> '. $row["name"] . '</td>' . 
			 '<td>' . $row["program"] . '</td>' . 
			 '<td ><a class="deleteLink" onclick="deleteStudent('.$row['id'].')"><img src="delete.png" name="Delete"  />Delete</a></td>' .
			 '</tr>';
 
	echo '</table>';
 ?>
 

 