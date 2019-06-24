<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Task</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</head>
<body>

<?php
require 'navbar.php';
?>
<div class="container">
<table class="table" id="task">
<thead>
<tr>
    <th>ID</th>
    <th>Task Name</th>
    <th>Date Todo</th>
    <th>Status</th>
    <th>Delete</th>

</tr>

</thead>
<tbody>
<?php
require 'db.php';
$sql="select * from task order by task_id desc";
$results=mysqli_query($conn,$sql);
while ($row =mysqli_fetch_assoc($results))

{
    extract($row);
    echo "<tr>
                    <td>$task_id</td>
                    <td>$task_name</td>
                 <td>$date_todo</td>
                    <td>$status</td>
     <td> <a href='delete.php?id=$task_id' class='btn btn-danger' onclick=\"return confirm('Do you want delete this task?');\">Delete</a> </td>
                    
                </tr>";
}
?>
</tbody>
</table>


</div>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );$(document).ready( function () {
        $('#task').DataTable();
    } );
</script>

</body>
</html>