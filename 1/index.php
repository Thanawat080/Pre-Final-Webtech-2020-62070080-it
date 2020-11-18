<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .gg{
        border:1px solid;
      
        height:500px;
        margin-right:30px;
        margin-top:30px;
    }
    img{
        width:100%;
        height:100%;
       
    }
    .rowup{
        
        height:300px;
    }
    .colup{
        height:300x;
    }
</style>
<body>
<?php
    echo "<div class='container'>";
    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo "<div class='container'>";
    echo "<div class='row'>";
        
    
    foreach ($result->tracks->items as $music) {
        
        echo "<div class='col-3 gg'>";
        echo "<div class='row rowup'>";
        echo "<div class='col colup'>";
        echo "<img src=".$music->album->images[0]->url.">";  
        echo "</div>";
        echo "</div>";
        echo "<div class='row rowdown'>";
        echo "<div class='col coldown'>";
        echo "<b>$music->name"."</b>";
        echo "<br>";
        echo "<p>"."Artists : ".$music->artists[0]->name."</p>";
        echo "<p>"."Release Date : ".$music->album->release_date."</p>";
        echo "<p> Avaliable: ".count($music->album->available_markets) ." countries</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    
        

    }
    echo "</div>";
        

    
   
    echo "</div>";
 
    


?>
    
</body>
</html>