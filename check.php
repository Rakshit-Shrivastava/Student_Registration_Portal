<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .heading{
                text-align: center;
                margin-top: 100px;
        }
        .test_container{
                width: 600px;
                border: 2px solid black;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
        }
        .wrapper li{                
                display: flex;
                margin: 10px;
        }
        </style>       
</head>
<body>
<h1 class="heading">How to get the value of select option display in input box</h1>
<div class="test_container">
<ul class="wrapper">
<li>
<form action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
<label for="Gender">Gender: </label>
<select name="gender_select" id="Gender">
        <option value="male" <?php echo ($_POST['gender_select']=='male'?'selected':'')?>>Male</option>
        <option value="female" <?php echo ($_POST['gender_select']=='female'?'selected':'')?>>Female</option>
</select>
<input type="submit" name="Submit" value="Submit">
</form>
</li>
<li>
<label for="">Selected Value: </label>
<input type="text" name="select_input" id="" value="<?php echo $_POST['gender_select']?>">
</li>
</ul>
</div>
</body>
</html>