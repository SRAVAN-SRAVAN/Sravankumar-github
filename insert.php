<?php
$Emp_name = $_POST['Emp_name']; 
$Emp_id = $_POST['Emp_id'];
$Emp_Exp = $_POST['Emp_Exp'];
$Emp_email = $_POST['Emp_email'];
$Emp_phone = $_POST['Emp_phone'];
$Emp_DOB= $_POST['Emp_DOB'];
$Emp_Location= $_POST['Emp_Location'];
$Emp_Address= $_POST['Emp_Address'];
$Emp_Current_Compeny= $_POST['Emp_Current_Company'];
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
die('Connection Failed '.$conn->connect_error);
}else
   {
    $stmt= $conn ->prepare("insert into employee_database(Emp_Name, Emp_id, Emp_email, Emp_phone, Emp_DOB, Emp_Location,Emp_Address,Emp_current_company)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $Emp_Name, $Emp_id, $Emp_email, $Emp_phone, $Emp_DOB, $Emp_Location,$Emp_Address,$Emp_current_company);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>
