
<?php
include 'database.php';

$uploadfile=$_FILES['uploadfile']['tmp_name'];

require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
	$highestrow=$worksheet->getHighestRow();

	for($row=3;$row<=$highestrow;$row++)
	{
		$name1 =$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$name2 =$worksheet->getCellByColumnAndRow(1,$row)->getValue();
		$name3 =$worksheet->getCellByColumnAndRow(2,$row)->getValue();
		$name4 =$worksheet->getCellByColumnAndRow(3,$row)->getValue();
		$name5 =$worksheet->getCellByColumnAndRow(4,$row)->getValue();
		$name6 =$worksheet->getCellByColumnAndRow(5,$row)->getValue();
		$name7 =$worksheet->getCellByColumnAndRow(6,$row)->getValue();
		$name8 =$worksheet->getCellByColumnAndRow(7,$row)->getValue();
		$name9 =$worksheet->getCellByColumnAndRow(8,$row)->getValue();
		$name10 =$worksheet->getCellByColumnAndRow(9,$row)->getValue();

		if($name1=='LT.U1.04.00.0.PM.M.0' AND $name5=='1.10.2015' || $name5=='1.10.2016' ||$name5=='1.10.2017' ||$name5=='1.10.2018' ||$name5=='1.10.2019')
		{
			$selectqu = "SELECT * FROM milestone Where name5='$name5'";
			  $run = mysqli_query($con,$selectqu);
			  if(mysqli_num_rows($run)>0){

				$updatequ = "UPDATE milestone SET name5='$name5', name6= name6+'$name6' where name1='$name1' AND name5='$name5' ";
				$runup = mysqli_query($con,$updatequ);
				header('location:index.php');
			  }else{
				  
			$insertqry="INSERT INTO milestone(name1,name2,name3,name4,name5,name6,name7,name8,name9,name10)
			VALUES ('$name1','$name2','$name3','$name4','$name5','$name6','$name7','$name8','$name9','$name10')";
			$insertres=mysqli_query($con,$insertqry);
			header('location:index.php');
		
		  }		
		}else{
			echo"<h4>Date Not found ! Data not Insert.</h4>";
		}
	}
}

?>


