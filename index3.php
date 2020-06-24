<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpDocument</title>
</head>
<body>
    <?php
    
    // foreach($car as $value){
    //     echo "$value <br>";
    
   $arr =array("he"=>"01","she"=>"02","they"=>"03");
   arsort($arr);
   foreach($arr as $v=>$v_value){
       echo "key: ".$v." , "."value:".$v_value;
       echo "<br>";
   }
    ?>
</body>
</html>