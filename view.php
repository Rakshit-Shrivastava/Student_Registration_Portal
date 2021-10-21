<!DOCTYPE html>
<html>

<head>
    <style>
     #myDIV li .btn {
  cursor: pointer;
}
#myDIV li .active, .btn:hover {
  color: skyblue;
}
    </style>
</head>

<body>
    <nav class="menu" id="myDIV">
        <ul >
            <li><a href="#" class="btn active">Dashboard</a></li>

            <li><a href="#" class="btn ">Add</a></li>

            <li><a href="#" class="btn ">Modify</a></li>

            <li><a href="#" class="btn ">Activity</a></li>

        </ul>
    </nav>

<script src="javascript/enableActiveButton.js"></script>
</body>

</html>