<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="marksheet";

$conn= new mysqli ($hostname,$username,$password,$databasename);
$a="select * from highschool";
$my=$conn ->query($a);
?>
<table border="3">
    
    <tr>
        <th>Name</th>
         <th>Class</th>
          <th>Result</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($my)){
 ?>
    <TR>
        <td><?=$row['name']?></td>
        <td><?=$row['class']?></td>
        <td><?php echo $row['result'];?></td>
    </TR>
  <?php
}
?>
</table>