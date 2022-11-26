<?php
include 'db.php';
ob_start();

echo $Firstname =$_POST['Firstname'];
echo $Lastname =$_POST['Lastname'];
echo $age=$_POST['age'];
echo $email=$_POST['email'];
echo $gender=$_POST['gender'];
echo $phonenumber=$_POST['phonenumber'];
echo $Address=$_POST['Address'];


$sql="INSERT INTO customer(Firstname,Lastname,Age,Email,Gender,Phone_number,Address) VALUES('$Firstname','$Lastname','$age','$email','$gender','$phonenumber','$Address')";
    
if($conn->query($sql))
{
    header("Location: ../index.php");
}
else
{
    echo "Error: " .$sql . "<br>" . $conn->error;
}
    $conn->close();
    ob_flush();
?>