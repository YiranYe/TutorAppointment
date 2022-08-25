<?php
include 'acasupport_head.php';
include 'con_config.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

else{



$Real_Name = $_POST['Real_Name'];
$Phone_Number = $_POST['Phone_Number'];
$email = $_POST['email'];
$Enrollment = $_POST['Enrollment'];
$ID = $_POST['ID'];
$password1 = $_POST['Password1'];
$password2 = $_POST['Password2'];


$dup = mysqli_query($conn,"SELECT tutorid FROM tutor WHERE tutorid='$ID'");


        if(mysqli_num_rows($dup) >0)

		{

            echo "<b><p>Login ID already existed.</b>- <a href=\"tutor_regist.php\">Back to Sign UP</a></p>";

        }

        else{

		if ($password1 == $password2) {


			$password = hash("sha256", $password1);
			
			$a=	"INSERT INTO tutor VALUES ('$ID','$password','$Real_Name','$email','$Phone_Number','$Enrollment')";
			$query =mysqli_query($conn,$a);
			
			
     
			echo "<b><p>Sign up success!</b> - <a href=\"tutorLoginIn.php\">Go to login</a></p>";

										}



 		else {

 		echo "<b><p>Password mismatch!</p></b> - <a href=\"tutor_regist.php\">Back to Sign UP</a>"; 

		}
}


}


include 'acasupport_foot.php';





?>