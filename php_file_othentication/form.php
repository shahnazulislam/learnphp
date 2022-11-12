<?php

  $var = "shahnazulislam@gmail.com";

  var_dump(filter_var($var,FILTER_VALIDATE_EMAIL));

if(filter_var($var, FILTER_VALIDATE_EMAIL, $iptions)){
    echo "<br>$var is valid email";
}else{
    echo "<br>$var is not valid email";
}



?>