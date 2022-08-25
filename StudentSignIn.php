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


$dup = mysqli_query($conn,"SELECT userid FROM users WHERE userid='$ID'");


        if(mysqli_num_rows($dup) >0)

		{

            echo "<b><p>Login ID already existed.</b>- <a href=\"student_regist.php\">Back to Sign UP</a></p>";

        }

        else{
			if (!preg_match("/^1[34578]\d{9}$/",$Phone_Number)) {
				echo "<b><p>Invalid phone format.</p></b> - <a href=\"student_regist.php\">Back to Sign UP</a>"; 
			}
			else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
				echo "<b><p>Invalid Email Format</p></b> - <a href=\"student_regist.php\">Back to Sign UP</a>"; 
			}
			else if ($password1 == $password2) {

				$password = hash("sha256", $password1);
				
				$a=	"INSERT INTO users VALUES ('$ID','$password','$Real_Name','$email','$Phone_Number','$Enrollment')";
				$query =mysqli_query($conn,$a);
				
				echo "<b><p>Sign up success!</b> - <a href=\"studentLoginIn.php\">Go to login</a></p>";

			}

			else {

				echo "<b><p>Password mismatch!</p></b> - <a href=\"student_regist.php\">Back to Sign UP</a>"; 

			}
}


}


include 'acasupport_foot.php';





?>