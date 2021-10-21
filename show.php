<?php

include "connection.php";

$sql = "select * from studentdetails";

$result = mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result)){

    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

?>