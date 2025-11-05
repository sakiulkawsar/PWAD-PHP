<?php
$fh = fopen("student.txt", "r");

while(!feof($fh)){
    echo fgets($fh) . "<br>";
}

?>

<hr>


<?php
$fh = fopen("student1.txt", "w");
fwrite($fh, "Hello world , hi how are you?\n");


fclose($fh);

?>

<hr>

