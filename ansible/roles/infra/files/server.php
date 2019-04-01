<?php 
	session_start();

        $redis = new Redis();

        if (! $redis->connect("localhost", 6379)) {
            die('Could not connect to redis ');
        }
	
	$db = mysqli_connect('localhost', 'testdb', 'testdb', 'test');
        if(! $db ){
                $redis->incr("http_5xx_req_total");
		die('Could not connect: ' . mysqli_error());
	 }
	// initialize variables
	$firstname = "";
    $lastname = "";
    $age = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $age= $_POST['age'];
		mysqli_query($db, "INSERT INTO Users (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')"); 
		$_SESSION['message'] = "User Information saved"; 
                $redis->incr("http_2xx_req_total");
		header('location: index.php');
	}
	// ...	

?>	
