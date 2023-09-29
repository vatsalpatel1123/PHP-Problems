<?php include('server.php');
if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password   =mysqli_real_escape_string ($conn ,$_POST ['password'] );
    $confirm_pass=mysqli_real_escape_string ($conn ,$_POST ['password1'] );
    //Checking if the username and email is already taken by another user or not
    if($password == $confirm_pass){
    $query="INSERT INTO form1 (uid, email, pwd) VALUES('$username', '$email', '$password')";
    $result = mysqli_query($conn,$query);

    $_SESSION['username'] = $username;
         
        $_SESSION['success'] = "You have logged in";
         
        header('location: indexx.php');
}
else{
    echo "Password Not Match!";
}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Registration system PHP and MySQL
	</title>
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">


		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username"
				>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"
				>
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
								name="reg_user">
				Register
			</button>
		</div>
		


<p>
			Already having an account?
			<a href="login.php">
				Login Here!
			</a>
		</p>



	</form>
</body>
</html>


<style>
* {
	margin: 0px;
	padding: 0px;
}
body {
	font-size: 120%;
	background: #F8F8FF;
}

.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 10px 10px 10px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 5px;
	font-size: 20px;
}
.input-group input {
	height: 32px;
	width: 95%;
	padding: 5px 10px;
	font-size: 15px;
	border-radius: 10px;
	border: 1px solid gray;
}
.btn {
	cursor: pointer;
	padding: 12px;
	font-size: 16px;
	color: white;
	background: #23585a;
	border: none;
	border-radius: 10px;
}
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
}
.success {
	color: #3c763d;
	background: #dff0d8;
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}

    </style>