<html>
<head>
</head>
<body>
<?php
$name=$_POST['emp_name'];
$emp_id=$_POST['emp_id'];
$emp_exp=$_POST['emp_exp'];
$emp_email=$_POST['emp_email'];
$emp_phone=$_POST['emp_phone'];
$emp_dob=$_POST['emp_dob'];
$emp_location=$_POST['exp_location'];
$emp_address=$_POST['emp_address'];
$emp_current_compeny=$_POST['exp_current_compeny'];
$con=mysqli_connect("localhost","root","");
if(!($con))
{
	die("error in connecting to DB");
}
else
{
	print "<i style='color:green'>connection successfull</i><br />";
}
$db=mysqli_select_db($con,"employee_database");
$query="insert into employee_database values($emp_id,$emp_exp,$emp_email,$emp_phone,$emp_dob,$emp_location,$emp_address,$emp_current_compeny)";
mysqli_query($con,$query);
$result=mysqli_query($con,"select * from employee_database");
$rows=mysqli_num_rows($result);
echo "<i style='color:blue'>num of rows inserted into the user_detail table are $rows</i>";
echo "<table border='1'><tr><th>nEmp_name</th><th>emp_id</th><th>emp_exp</th><th>emp_email</th><th>emp_phone</th><th>emp_dob</th><th>emp_location</th><th>emp_address</th><th>emp_current_compeny</th></tr>";
for($row=1;$row<=$rows;$row++)
{
$rowv=mysqli_fetch_array($result,MYSQLI_ASSOC);
echo "<tr><td>".$rowv['emp_name']."</td>";
echo "<td>".$rowv['emp_id']."</td></tr>";
echo "<td>".$rowv['emp_exp']."</td></tr>";
echo "<td>".$rowv['emp_email']."</td></tr>";
echo "<td>".$rowv['emp_phone']."</td></tr>";
echo "<td>".$rowv['emp_dob']."</td></tr>";
echo "<td>".$rowv['emp_location']."</td></tr>";
echo "<td>".$rowv['emp_address']."</td></tr>";
echo "<td>".$rowv['emp_current_compeny']."</td></tr>";

}
echo "</table>";
mysqli_close($con);
?>
<h4>Enter user name to be searched</h4>
<form action="http://localhost/TEST/search.php" method="post">
Enter employee id to be searched:<input type="text" name="emp_id"/>
<input type="submit" value="Search"/>
<input type="reset" value="reset"/>
</form>
</body>
</html>