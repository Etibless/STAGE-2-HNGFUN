<?php
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Rationale" rel="stylesheet">
    <link rel="stylesheet" href="css/time.css">
</head>

<body>
    <!-- <div class="yup"> -->
<div class="yup1">HNG INTERNSHIP 4.O</div>
<div class="yuptimesm">Time:</div>
<div class="yuptime"><?php echo date ("h:i:sa"); ?></div>
<div class="yuptod">Today:</div>

<div class="yupmon"><?php echo date ("l, d/m/Y") ?></div>
<!-- </div> -->
    
</body>
</html>