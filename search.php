<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainee Details</title>
    <link rel="stylesheet" href="1.css">
    <?php 
        include('js.php');
        include('db.php'); 
    ?>
</head>
<body>
<div class="topnav">
  <a class="active"href="admin_dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  
  <div class="topnav-right">
    <a href="logout.php"> <i class="fa fa-fw fa-user"></i>Logout</a>
  </div>
</div>
		<div class="well text-center"><h2>Trainee Details : </h2></div>
        <center>
        <form action="search.php" method="post">
            Enter Adimission ID :
            <input type="number" name="add_id">
            <input type="submit" name="search" value="Search">

        </form>
        </center>
				<div class="panel panel-body">
					<table class="table">
						<tr>
							
							<th><b>Adimission ID</b></th>
							<th><b>Name</b></th>
							<th><b>Mobile</b></th>
							<th><b>Address</b></th>
							<th><b>Fee</b></th>
                            <th><b>Adimission Date</b></th>
						</tr>
						<?php
                         if(isset($_POST['search']))
                         {
                            include('db.php');
                            $query = "select * from trainee  where add_id = $_POST[add_id]";
                            $query_run = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($query_run)) 
                                {
                                ?>
                                        <div class="panel panel-body">
                                        
                                            <tr>
                                                
                                                <td><?php echo $row['add_id'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['mob'];?></td>
                                                <td><?php echo $row['address'];?></td>
                                                <td><?php echo $row['fee'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                            </tr>
                                        </div>
                                    <?php 
                                }
                         }?>    
					</table>
		</div>
</body>
</html>