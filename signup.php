<!DOCTYPE html>
<html>
	<head>
	    <title>Login forum</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript">
function myFunction() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
       alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}
		</script>
	</head>
	<body>
 		 <div id="container">
 		 <fieldset>
		<legend> Please sign up here to join our Forum</legend>
		<form action="insert.php" method="POST" onsubmit="return myFunction()">
			First Name *:	<div class="line"><input type="text" name="fname" placeholder="Enter first name" value="daniel"></div>
			Second Name *:<div class="line"><input type="text" name="sname" placeholder="Enter second name" value="wambua"></div>
			Username *:	<div class="line"><input type="text" name="uname" placeholder="Enter your user name" value="Abednego"></div>
			PassWord*:	<div class="line"><input id="pass1" type="password" name="password" placeholder="Enter your user name" value="password"></div>
			Retype-PassWord*:	<div class="line"><input id="pass2" type="password" name="re_password" placeholder="Enter your user name" value="password"></div>
	
		</fieldset>
			 <div  class="line_submit"><input type="submit" value="Submit" /></div>
				Do you an account Login here <a href="index.php">Log In</a>
		</form>
		</div>
	</body>
</html>