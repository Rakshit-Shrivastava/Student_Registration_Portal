<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content404="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Multiple Select Dropdown in PHP</title>
    <style>
        /* .warning {
            color: orange;
            margin: 0;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        } */
        body {
    /* background-image: radial-gradient(circle, #cfcfcf, #bcb9bc, #aba3a8, #9c8e91, #8c7979); */
    background-image: radial-gradient(circle, #ecf7fc, #dbf0f9, #cae9f6, #b9e3f3, #a9dcf1);
}
.text{
    font-size: 25px;
    color:gray;
    position: absolute;
    top:70%;
    left:50%;
    transform: translate(-50% ,-50%);
}
.text-3d {
    text-transform: uppercase;
    font-size: 130px;
    color:gray;
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50% ,-50%);
    text-shadow:
                    0 1px 0 rgb(190,190,190),
                    0 2px 0 rgb(185,185,185),
                    0 3px 0 rgb(180,180,180),
                    0 4px 0 rgb(175,175,175),
                    0 5px 0 rgb(170,170,170),
                    0 6px 0 rgb(165,165,165),
                    0 7px 0 rgb(160,160,160),

                    0 1px 5px rgba(0,0,0,.05),
                    0 3px 5px rgba(0,0,0,.10),
                    0 5px 10px rgba(0,0,0,.15),
                    0 7px 10px rgba(0,0,0,.20),
                    0 10px 15px rgba(0,0,0,.25);
    transition: all 0.3s ease-in-out;        
    cursor: pointer;
}
.text-3d:hover {
    text-shadow:
                    0 1px 0 rgb(190,190,190),
                    0 2px 0 rgb(185,185,185),
                    0 3px 0 rgb(180,180,180),
                    0 4px 0 rgb(175,175,175),
                    0 5px 0 rgb(170,170,170),
                    0 6px 0 rgb(165,165,165),
                    0 7px 0 rgb(160,160,160),
                    0 8px 0 rgb(155,155,155),
                    0 9px 0 rgb(150,150,150),

                    0 1px 5px rgba(0,0,0,.05),
                    0 5px 5px rgba(0,0,0,.10),
                    0 10px 10px rgba(0,0,0,.15),
                    0 15px 10px rgba(0,0,0,.20),
                    0 20px 15px rgba(0,0,0,.25);
    transform: translate(-51%,-51%);
    transition: all 0.3s ease-in-out;
} 

/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}
body{
    background: linear-gradient(45deg,#8500ff,#5acaff);
    height: 100vh;
}
#container404{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    background: url('images/404.png'),#151729;
    box-shadow: 0 15px 30px rgba(0, 0, 0, .5);

}
#container404 .content404{
    font-size: 680px;
    text-align: center;
}
#container404 .content404 h2{
    font-size: 18vw;
    color: #fff;
    line-height: 1em;
}
#container404 .content404 h4{
    position: relative;
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #111;
    background: #fff;
    font-weight: 300;
    padding: 10px 20px;
    display: inline-block;
}

#container404 .content404 p{
    color: #fff;
    font-size: 1.2em;
}
#container404 .content404 a{
    position: relative;
    display: inline-block;
    padding: 10px 25px;
    background: #ff0562;
    color: #fff;
    text-decoration: none;
    margin-top: 25px;
    border-radius: 25px;
} */
    </style>
</head>

<body>

<?php


echo "<span class='text-3d'>404</span>";
echo "<span class='text'>No data to show, please select the student first to view there data.</span>";
?>
    
    <!-- <h1 class='warning'>No data to show, please select the student first to view there data.</h1>"; -->


    <!-- <div id='container404'>
        <div class='content404'>
            <h2>404</h2>
            <h4>Opps! Page not found</h4>
            <p>No data to show, please select the student first to view there data.</p>
            <a href='#'>Back to Home</a>
        </div>
    </div> -->


<!-- <script>
var container404 = document.getElementById('container404');
window.onmousemove = function(e){
    var x = - e.clientX/5,
        y = - e.clientY/5;
    container404.style.backgroundPositionX = x + 'px';
    container404.style.backgroundPositionY = y + 'px';

}
</script> -->
</body>

</html>