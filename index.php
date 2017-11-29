
        <?php
        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="newpaper";
        
        $conn=new mysqli ($hostname,$username,$password,$databasename);
        $q="select * from topnews";
        $result=$conn->query($q);
        ?>
<table border="20">
    <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Papername</th>
    </tr>
    

<?php
        while ($row = mysqli_fetch_assoc($result)){
     ?>      
<tr>
    
    <td><?php echo $row ['id'];  ?></td>
    <td><?php echo $row ['title'];  ?></td>
    <td><?php echo $row ['papername'];  ?></td>
    
</tr>
    
    
    
    
<!--    echo $row ['id'] ."&nbsp;&nbsp;&nbsp;" ;
    echo $row ['title'] ."&nbsp;&nbsp;&nbsp;<p></p>";
    echo $row ['papername'] ."&nbsp;&nbsp;&nbsp;<p></p>";
    echo "<br>";-->
<?php
}
        ?>
</table>