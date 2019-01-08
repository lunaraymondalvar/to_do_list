
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TO DO LIST APP</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<p>TO DO LIST</p>
	<!-- <form action="./app/controllers/add_task.php" method="POST"> -->
	<form>
		<input type="text" name="taskname" id="new-task">	
		<button id=addTaskBtn>Add Task</button>
	</form> 


	<script>
	//add task
	$("#addTaskBtn").click( () => {
        const newTask = $('#new-task').val();
        
        $.ajax({
          method : 'GET',
          url : '../controllers/add_task.php',
          data : {name : newTask},
        }).done( 
        	console.log('added task')
        );
     });
	</script>

  
	<h1>Task List</h1>
	<ul id="taskList">

	<?php

	require_once '../controllers/connect.php';
	// require_once './app/controllers/connect.php';

	$sql = "SELECT * FROM tasks";
	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) { ?>
		<li data-id="<?php echo $row['id'] ; ?>">
			<?php echo $row['name'] . " is task number" . $row['id'] ; ?>
			<button class="deleteBtn">Delete</button>
		</li>
	<?php } ?>

	</ul>

	<script>
		$('#taskList').on('click', '.deleteBtn', function() {
			const task_id = $(this).parent().attr('data-id');
			// console.log(task_id)
			$.ajax({
				method : 'post',
				url : '../controllers/remove_task.php',
				data : { task_id : task_id }
			}).done( data=> {
				$(this).parent().fadeOut();
	    	});
		});
	</script>

</body>
</html>