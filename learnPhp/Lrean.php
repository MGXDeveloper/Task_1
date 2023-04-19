<?php require 'Class_Student.php'; ?>

<?php

$fi= new Student();



if(isset($_POST['submit'])){
    $name=$_POST['student_name'];
    $stage=$_POST['student_stage'];
    $fi->Add_Student($name,$stage);
}

if(isset($_POST['Display'])){
    $fi->Read_Student();
}

if(isset($_POST['Search'])&&isset($_POST['id'])){
    $id=$_POST['id'];
    $fi->Search_Student($id);
}

if(isset($_POST['Delete'])&&isset($_POST['id'])){
    $id=$_POST['id'];
    $fi->Delete_Student($id);
}

if(isset($_POST['Change'])&&isset($_POST['id'])){
    $id=$_POST['id'];
    $name=$_POST['c_name'];
    $stage=$_POST['c_stage'];
    $fi->Change_info($id,$name,$stage);
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Lrean.php" method="post">

        <label>StudentName</label>
        <input type="text" name="student_name" id="">
        <br>
        <label>Stage :</label>
        <input type="number" name="student_stage" id="">
        <br>
        <input type="submit" name="submit" value="submit"><br>
    </form>


    <form action="Lrean.php" method="post">
        <input type="submit" name="Display" value="Display">
    </form>

    <br><br>

    <form action="Lrean.php" method="post">
        
        <label>ID</label>
        <input type="text" name="id" id="">
        <br>
        <input type="submit" name="Search" value="search"><br>
        <input type="submit" name="Delete" value="Delete"><br>
    </form>


    <br><br>
    <form action="Lrean.php" method="post">
        <h>--------Change--------</h><br>
        <label>ID</label>
        <input type="text" name="id" id="">
        <br>
        <label>Name</label>
        <input type="text" name="c_name" id="">
        <br>
        <label>Stage</label>
        <input type="number" name="c_stage" id="">
        <br>
        <input type="submit" name="Change" value="Change"><br>
    </form>


</body>
</html>