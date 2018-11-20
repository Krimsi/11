<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lobster|Oswald" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="icons/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">



<!-- Optional theme -->
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-theme.css">

<title>Document</title>


</head>
<body>


<?php
$mpp3=0;
for($i=0;$i<6;$i++){
  	
  	for($j=0;$j<5;$j++){
   
  		echo $mas[$i][$j] = rand(15,35) ." | ";

  		 if($i==1){
    	$mpp3=$mpp3+$mas[$i][$j];

    }
  
  	}


echo "<br/>";


}
echo $mpp3;

?>










</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

<script src="js/script.js"></script>
</body>
</html>