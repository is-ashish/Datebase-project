<?php
	if(isset($_POST['get']))
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("std_detail");
	}
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$fname=$_POST['fathername'];
			$dob=$_POST['dod'];
			$sex=$_POST['sex'];
			$rollno=$_POST['roll_no'];
			$course=$_POST['course'];
			$branch=$_POST['branch'];
			$sem=$_POST['sem'];
			$year=$_POST['year'];
			$CPI=$_POST['cpi'];
			$email=$_POST['email'];
			$mob=$_POST['mobno'];
			$add=$_POST['address'];
			$insert=mysql_query("INSERT INTO 
				student(roll_no,fname,lname,father_name,dob,gender,branch,sem,year,email,mobno,address) 
				VALUES()")
?>	