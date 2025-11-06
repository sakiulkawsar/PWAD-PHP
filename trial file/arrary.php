<?php
// new mericak array
["bangladesh", "india", "napel", "srilonka", "indoneshia"];
array(10, 20, 30, 40, 50);

["rohim"=>20,"korim"=>20,"rohim"=>30];
// kr = revers sort; ksort for arry 
$countries = ["Bangladesh"=>"dhaka", "Napel"=>"kathmondu", "India"=>"delhi"];
krsort($countries);
foreach($countries as $country=>$capital){
    echo "The Capital of $country is $capital<br>";
    // echo "$country <br>";
    // echo "$capital<br>";
}
// print_r($countries);

?>