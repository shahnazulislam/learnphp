 <?php

//filter sanitization topic
/*
filter_var(var,filtername,flag)
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_NUMBER_FLOAT
FILTER_SANITIZE_MAGIC_QUOTES
FILTER_SANITIZE_STRING
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_SPECIAL_CHARS
*/

//FILTER_SANITIZE_EMAIL - 01
/*
$var = "shahnaz//ulislam@gmail.com";
$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if(filter_var($var, FILTER_VALIDATE_EMAIL)){
  echo "<br>$var is valid email.";
}else{
  echo "<br>$var is not an valid email.";
}
 
*/

//FILTER_SANITIZE_URL - 02
/*
$var = "https://shahnazul islam.net";
$var = filter_var($var, FILTER_SANITIZE_URL);

if(filter_var($var, FILTER_VALIDATE_URL)){
  echo "<br>$var is valid url.";
}else{
  echo "<br>$var is not an valid url.";
}
*/

//FILTER_SANITIZE_NUMBER_INT- 03

/*
$var = "34";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if(filter_var($var, FILTER_VALIDATE_INT)){
  echo "<br>$var is valid int.";
}else{
  echo "<br>$var is not an valid int.";
}
*/

//FILTER_SANITIZE_FLOAT - 04

/*$var = "48.94abc";
$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);

if(filter_var($var, FILTER_VALIDATE_FLOAT)){
  echo "<br>$var is valid float.";
}else{
  echo "<br>$var is not an valid float.";
}*/

//agulo tamon kaze lage na

/*FILTER_SANITIZE_MAGIC_QUOTES -05
FILTER_SANITIZE_STRING - 06
FILTER_SANITIZE_ENCODED - 07
FILTER_SANITIZE_SPECIAL_CHARS - 08*/

/*
$arr = array(
    "stname" => "Ram Kumar",
    "stmark" => "90",
    "stemail" => "ramkumar@gmail.com",

);

$filter = array(
    "stname" => (
        "filter" => FILTER_SANITIZE_STRING,//filter spacial carector
        "flags" => FILTER_FLAG_STRIP_HIGH,//for remove spatial carector;
    )
        "stmark" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
        )
    ),
        "stemail" => FILTER_SANITIZE_EMAIL
);
echo "<pre>";
print_r(filter_var_array($arr, $filter));
echo "</pre>";*/

//php filter input function

/*
INPUT_GET
INPUT_POST
INPUT_COOKIE
INPUT_SERVER
INPUT_ENV
*/

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Marks:</label>
        <input type="text" name="marks" autocomplete="off">
        <input type="submit" name="submit" value="submit">
        <br/>

        <?php 
            if (isset($_REQUEST['submit'])) {
              $options =array(
                "options" => array(
                  "min_range" => 1,
                  "max_range" => 100,
                )
              );
              if (filter_input(INPUT_POST, "marks",    FILTER_VALIDATE_INT, $options)) {
                echo ("
                  <script>
                    alert('marks is valid');
                  </script>
                ");
                }else{
                  echo "
                  <script>
                    alert('marks is invalid')
                  </script>
                  ";
                };
            };
          ?>

    </form>
     
 </body>
 </html>


