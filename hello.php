


<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
  
     <?php
   
    echo "<strong>bt1</strong> </br>";
    function getAge($birthyear){
        $age = date('Y') - $birthyear;
        echo "Age is: " .$age. "</br></br>";
    }
    getAge(1999);
?>






 <?php
echo "<strong>bt2</strong> </br>";
    $a = 3;
    $b = 5;
    $c = 7;
    if($a> $b && $a > $c)
    {
        echo "$a la so lon nhat </br>";
    }
    elseif($b > $a && $b > $c ){
        echo "$b la so lon nhat </br>";
    }
    else {
        echo "$c la so lon nhat </br>";
    }
    ?>



 

<?php

echo "<br><strong>bt 4</strong></br>";
$n = 10;
$total= 0;
for($i=0; $i <= $n; $i+=2){
    $total += $i;
}
echo "tong so chan den 10 la: " .$total. "</br></br>";
?>









<table border="1px solid" style="border-collapse:collapse">
    <tr> 
        <?php
        
    echo "<strong>bt 5</strong></br>";
    echo "bang cuu chuong</br>";
            for($i = 1; $i < 10; $i++)
            {
                echo "<td>";
                for($j = 1; $j < 10; $j++)
                {
                    echo "$i x $j ="   .($i * $j);
                    echo "</br>";
                }
                echo "</td>";
            }
        ?>
    </tr>
</table>



















<?php
   
    echo "</br><strong>bt6</strong></br>";
    $arr = array("realme","apple","samsung","oppo","redmi");
    $value = "realme";
    array_splice($arr,3,1,$value);
    print_r($arr);
    echo "</br>";
?>









<?php
   
    echo "</br><strong>bt7</strong></br>";
    $a = 'btec.fpt.edu.vn';
    echo "so phan tu cua chuoi la: " .strlen($a). "</br>";
    echo "cat 'btec' ra khoi chuoi: " .str_replace("btec."," ",$a);
?>

       
 
    </html>







  
    




