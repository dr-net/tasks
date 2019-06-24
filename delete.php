<?php
if (isset($_GET['id']))
{
    $id =$_GET["id"];
    require 'db.php';
    $sql ="delete from task where task_id = $id";
    //echo  $sql;
    mysqli_query($conn, $sql);

}
header("location:view.php");