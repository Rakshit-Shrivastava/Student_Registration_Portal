<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
  <label for="">Sort Record:</label>
            <select name="sortselect" id="">
                <option value="All Clear">AC</option>
                <option value="Backlog">Backlog</option>
                <option value="Not Appeared">Not Appeared</option>
                <option value="course">Course</option>
                <option value="branch">Branch</option>
                <option value="semester">Semester</option>
            </select>
    <input type="submit" name="save">    
  </form>

  <?php
  session_start();
if(isset($_POST['save'])){
  echo $_POST['sortselect'];
  echo $_SESSION['teacherid'];
  echo $_SESSION['userid'];

  // SELECT studentid from studentdetails WHERE firstSemester LIKE "All%" AND secondSemester LIKE "All%" AND thirdSemester LIKE "All%" AND fourthSemester LIKE "All%" AND fifthSemester LIKE "All%" AND sixthSemester LIKE "All%" AND seventhSemester LIKE "All%" AND eighthSemester LIKE "All%"

  //SELECT studentid from studentdetails where (teacherid = "Rahul") AND (firstSemester LIKE "Not%" or thirdSemester LIKE "__Back%")
}
  ?>
  <br>

<label for="">Sort Record:</label>
            <select name="sort" id="">
                <option value="All Clear" <?php if($_POST['sortselect'] == 'All Clear') {echo 'selected';} ?>>AC</option>
                <option value="Backlog" <?php if($_POST['sortselect'] == 'Backlog') {echo 'selected';} ?>>Backlog</option>
                <option value="Not Appeared" <?php if($_POST['sortselect'] == 'Not Appeared') {echo 'selected';} ?>>Not Appeared</option>
                <option value="course" <?php if($_POST['sortselect'] == 'course') {echo 'selected';} ?>>Course</option>
                <option value="branch" <?php if($_POST['sortselect'] == 'branch') {echo 'selected';} ?>>Branch</option>
                <option value="semester" <?php if($_POST['sortselect'] == 'semester') {echo 'selected';} ?>>Semester</option>
            </select>
            
</body>
</html>