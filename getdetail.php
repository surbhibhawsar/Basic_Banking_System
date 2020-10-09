<?php 
session_start();
$con=mysqli_connect('localhost','root','','surbhi');
$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<html>
<head>
   <title>
   UserView
    </title>
    </head>
    <style>
body{
background-image:url("imgs/wall.jpg");
 background-size:cover;
 
	}
       h1{ 
              text-shadow:2px 2px 1px #ffbf69;  
            font-size:50px;
      }  
	</style>
    <body>
	
	<center>
        <h1><font face="Verdana" color="#011627">User's Detail</font></h1>
		<br>

        <table border=2 width="30%" height="70%">
		
	<thead bgcolor="#b1a7a6">
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</thead>
	<tbody  align="center">
		<tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

		</tr>
		<tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="#ced4da">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        <tr bgcolor="gray">
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

        </tr>
        
	</tbody>
</table>
<div>
 <div>
       <a href="index.php" ><input type="button" name="Home" value="Return Home" style="background-color:blue;color:white;font-size: 20px;width:170px; height:40px;border:1px solid blue;cursor:pointer;border-radius:10px"/>
            </a>
</div>
 </div>
        </center>
    </body>
</html>