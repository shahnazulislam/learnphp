<?php
   $var = 38;

   var_dump(filter_var($var,FILTER_VALIDATE_FLOAT));
   $options = array(
    "option" => array(
        "main_range"=>20,
        "max_range"=>30
    )
    );

    if(filter_var($var, FILTER_VALIDATE_FLOAT, $iptions)){
        echo "<br>$var is float";
    }else{
        echo "<br>$var is not float";
    }
    echo "test my working directory";
    
    

?>