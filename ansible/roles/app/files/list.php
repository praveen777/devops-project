<?php

         require_once "server.php";
         $sql = 'SELECT * FROM test.Users';
         $result = mysqli_query($db, $sql);



?>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table >
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>CreatedAtTimestamp</th 
    </tr>
  </thead>
  <tbody>
<?php
         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row["FirstName"]; ?></td>
      <td><?php echo $row["LastName"]; ?></td>
      <td><?php echo $row["Age"]; ?></td>
      <td><?php echo $row["CreatedAtTimestamp"]; ?></td>
  </tr>
            <?php }} ?>
  </tbody>
 <?php mysqli_close($db);?>
 <ul>
 
 <li><a href="index.php"><strong>Back to home</strong></a></li>

 </ul>
</body>
</html>
<?php
     $redis->incr("http_2xx_req_total");
?>
