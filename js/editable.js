$(document).ready(function(){
	$('#employeeTable').Tabledit({
		deleteButton: true,
		editButton: true,
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'name'], [2, 'gender'], [3, 'age'], [4, 'address']]
		},
		hideIdentifier: true,
		url: 'save_edit.php'		
	});
});