
<?php

$rsp=array("arrorio portao","headsprings","novo hamburgo", "sao leopoldo");
$e=array(14,43,23,67);
$g=array(12,4,5,10);
$b=array(10,8,11,23);
$vb=array(30,0,1,3);

for($row=1; $row <=8; $row++){
    for($i=1; $i<=$row; $i++){
        echo "*";
    }
    echo "<br/>";
}

/*$first_num = $_POST ['first_num'];
$second_num = $_POST ['second_num'];
$operator = $_POST ['operator'];
$result = '';

if(is_numeric($first_num) && is_numeric($secondnum)){
    switch($opeartor){
        case "add":
            $result=$first_num + $second_num;
        break;

        case "substract":
            $result=$first_num - $second_num;
        break;

        case "multiply":
            $result=$first_num * $second_num;
        break;

        case "divide":
            $result=$first_num / $second_num;
        break;

    }
}*/


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>


            <table class="table">
                <tr>
                    <th>River sample points</th>
                    <th>Excellent</th>
                    <th>Good</th>
                    <th>Bad</th>
                    <th>Very Bad</th>

       
                        <?php
                        for($i = 1; $i < count($rsp); $i++)
                        { ?>

                </tr>
                        
                        <td><?php echo $rsp[$i] ;?></td>
                        <td><?php echo $e[$i] ;?></td>
                        <td><?php echo $g[$i] ;?></td>
                        <td><?php echo $b[$i] ;?></td>
                        <td><?php echo $vb[$i] ;?></td>
                    
                    <tr>
                    <?php } ?>
                </tr>
            </table> 
            


            

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>