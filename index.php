<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Excel</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container py-5">
  <div class="row">
      <div class="col-md-3 "></div>
    <div class="col-md-6">
      <h4>Excel Upload </h4>
      <hr>
      <form method="post" action="file-upload.php" enctype="multipart/form-data">
        <div class="form-group row">
             <input type="file" name="uploadfile" class="form-control py-1"/>
			
			  <input type="submit" name="submit" class="btn btn-primary mt-2 " value="Submit">
		
      </form>
	 
	    <form method="post" action=" ">
	      <input type="submit" name="subtn" class="btn btn-primary ml-5 mt-2" value="Show result">
       	</form>
	</div>
	 
	</div>
    </div>
  </div>
</div>

</body>
</html>
<table border>
  <tr>
    <th>Milestone / Advance Payment ID</th>
    <th>Milestone Title (ENG)</th>
    <th>Milestone Title (RUS)</th>
    <th>	Level 2 Schedule ID</th>
    <th>Milestone Date</th>
    <th>Milestone Price, USD</th>
    <th>Advance payment, USD</th>
    <th>Quarterly advance payment depreciation, USD</th>
    <th>General advance payment depreciation, USD</th>
    <th>	Balance payment, USD</th>

  </tr>
<?php
  if(isset($_POST['subtn'])){
	  
	  $selectq="select * from milestone";
	  
	  $run =mysqli_query($con,$selectq);

	  $count= 1;
	  while($rows= mysqli_fetch_array($run)){ ?>
	     <tr>
		    <td><?php  echo $rows['name1'];?></td>
		    <td><?php  echo $rows['name2'];?></td>
		    <td><?php  echo $rows['name3'];?></td>
		    <td><?php  echo $rows['name4'];?></td>
		    <td><?php  echo $rows['name5'];?></td>
		    <td><?php  echo $rows['name6'];?></td>
		    <td><?php  echo $rows['name7'];?></td>
		    <td><?php  echo $rows['name8'];?></td>
		    <td><?php  echo $rows['name9'];?></td>
		    <td><?php  echo $rows['name10'];?></td>
		  
		 </tr>
	    
	<?php	  
	  }

  }

?>
</table>

