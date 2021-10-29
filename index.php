<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<div class="container">
	<h2>Example: Inline Editable HTML Table with jQuery, PHP & MySQL</h2>		
	<table id="employeeTable" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>					
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include_once("inc/db_connect.php");
			$sqlQuery = "SELECT id, name, gender, address, age FROM developers LIMIT 5";
			$result = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
			while( $emp = mysqli_fetch_assoc($result) ) {
			?>
			   <tr id="<?php echo $emp ['id']; ?>">
			   <td><?php echo $emp ['id']; ?></td>
			   <td><?php echo $emp ['name']; ?></td>
			   <td><?php echo $emp ['gender']; ?></td>
			   <td><?php echo $emp ['age']; ?></td> 		   
			   <td><?php echo $emp ['address']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>
</div>
<script type="text/javascript" src="js/editable.js"></script>
<?php include('inc/footer.php');?>

