<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
 <h2> Welcome</h2>

Insert login and password of the user :
<form id="form2" action="../php/insertUser.php" method="POST">
	 <input type="text" name="login"/>
 	 <input type="password" name="userpassword"/>
 	 <input type="submit"/>
</form>

<table>
	<thead>
		<tr>
			<th>Login</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<tr id="table-ajax"></tr>
	</tbody>	
</table>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script src="../js/jquery.forms.min.js"></script>
	
	<script>
		$('#form2').submit(function(){
	        $(this).ajaxSubmit({

	        	success: function($table) {
	          	
	          		$("#table-ajax").html($table);
	            
	          	}
	        });
	        
	        return false;
	    }); 
	</script>

</body>
</html>