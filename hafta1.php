<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php   
    

    $cars = array("volvo","mercedes","bmw");
    var_dump($cars);

    $degisken ="mustafa";
    echo  strlen($degisken);

    $degisken2 = "mustafa taha soydan";
    echo str_word_count($degisken2);
    echo "<br>";

    $degisken = 3;
    if(is_int($degisken))
    {
       echo  "int değeri ";
        

    }


    //cast işlemi

    $intCast = "2323";

    $x = (int)$intCast;
    echo $x;



    $st1 = "mts";
    $st2 = "soydan";

    $st1 .=  $st2;


    echo $st1;

    ?>  

    <?php 
     $time  = date("H");

     echo "<br>";
    
     if($time <20)
     {
         
         ?>
         
         <h2>  
         <?php echo   $time. "iyi günler"; ?>
          </h2>
        <?php
     }
     ?>

     <?php 
     $renk ="sd";

     switch($renk)
     {
         case "red":
         echo "your favorite color is red" ;
         break;
         
         case "green":
         echo "your favorite color is green";
         break;

         default:
         echo "your favorite color is null :=)";
     }

     
     
     ?>


     <?php 

     //while loop

     $x1 = 1 ;

     while($x1 <10)
     {
         echo "the number is $x1 <br>" ;
         $x1++;
     }
     
     
     
     
     ?>



<?php

$colors = array("red","blue","green","pink");
foreach($colors as $value)
{
    ?>
    <h2>
    <?php 
    echo   "$value <br>";?> </h2> 
    <?php
}
?>

<?php
/*
for($x1=0 ; $x1 <25; $x1++)
{
    echo" $x1 <br>";
}*/

 
?>


<?php 
 // strict requirement
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
//setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


?>






<?php
$cars = array("Volvooooooooooo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


echo count($cars);


$List = array("mts"=>22,"bahar"=>20,"ahmet"=>12);

foreach ($List as $key=> $value) {
    echo "<br>$value ---- $key";
    
}

echo "print r <br>";
print_r($List);
?>


<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>







</body>
</html>