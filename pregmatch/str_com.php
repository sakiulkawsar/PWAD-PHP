<?php
$pwd = "supersecret";
$pwd2 = "supersecret";

echo strcmp($pwd, $pwd2) === 0 ? "Passwords match" : "Passwords do not match";

echo "<br>";
if(strcmp($pwd, $pwd2) === 0){
    echo "Passwords match";
} else {
    echo "Passwords do not match";
}
?>