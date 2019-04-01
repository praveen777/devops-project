<?php  include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>FirstName</label>
			<input type="text" name="firstname" value="">
		</div>
		<div class="input-group">
			<label>LastName</label>
			<input type="text" name="lastname" value="">
		</div>
		<div class="input-group">
			<label>Age</label>
			<input type="text" name="age" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>

<ul>

    <li><a href="list.php"><strong>View All Users</strong></a></li>

</ul>

</body>
</html>

<?php
$redis->incr("http_2xx_req_total");
?>
