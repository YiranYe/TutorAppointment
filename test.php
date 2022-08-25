<?php

$a="8:30-9:30";
echo "test: ".$a."<br>";

echo "test2:".strpos($a,"8:30-9:30");

if (strpos($a,"12:30-13:30") !=='0'){

	echo "successful";
}
else {

	echo "error";
}

if($a=="12:30-13:30"){

echo "<br>0000000";

}
else{
echo "<br>111111";

}

?>