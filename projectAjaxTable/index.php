<!DOCTYPE html>
<html>
<head>
	<title>
		login
	</title>
</head>
<body>

 <h2>Insert your login and password:</h2>

<form id="form3" action="php/verification.php" method="POST">
	 <input type="text" name="login"/>
 	 <input type="password" name="userpassword"/>
 	 <input type="submit"/>
</form>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="js/jquery.forms.min.js"></script>
	
<script>
	$('#form3').submit(function(){
        $(this).ajaxSubmit({

          success: function($return) {

            if($return == "success"){
            	window.location.href = "pages/table.php";

            }else{
            	console.log("return: "+$return);
            	
            	$('#form3').clearForm();
            	alert("Wrong login and/or password!");
            }
          }
        });
        return false;
    }); 
</script>
</body>
</html>